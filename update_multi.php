<?php

/*
// +--------------------------------------------------------------------------+
// | Project:    TBDevYSE - TBDev Yuna Scatari Edition                        |
// +--------------------------------------------------------------------------+
// | This file is part of TBDevYSE. TBDevYSE is based on TBDev,               |
// | originally by RedBeard of TorrentBits, extensively modified by           |
// | Gartenzwerg.                                                             |
// |                                                                          |
// | TBDevYSE is free software; you can redistribute it and/or modify         |
// | it under the terms of the GNU General Public License as published by     |
// | the Free Software Foundation; either version 2 of the License, or        |
// | (at your option) any later version.                                      |
// |                                                                          |
// | TBDevYSE is distributed in the hope that it will be useful,              |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with TBDevYSE; if not, write to the Free Software Foundation,      |
// | Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA            |
// +--------------------------------------------------------------------------+
// |                                               Do not remove above lines! |
// +--------------------------------------------------------------------------+
*/

// �� ������� ���� ���� �� ��� ��������, �� ��� �� �������� � 23:59

require_once('include/bittorrent.php');
dbconn();
loggedinorreturn();

require_once('include/scraper/httptscraper.php');
require_once('include/scraper/udptscraper.php');

$timeout = 2;
$udp = new udptscraper($timeout);
$http = new httptscraper($timeout);

$tid = intval($_GET['id']);
if (!$tid)
	die('WTF?!');

list($name, $cur_visible, $multitracker, $last_mt_update) = mysql_fetch_row(sql_query('SELECT name, visible, multitracker, last_mt_update FROM torrents WHERE id = '.$tid));
if ($name == '' || $multitracker == 'no')
	stderr($tracker_lang['error'], "������ �������� ���, ��� �� �� ���������������.");

if (strtotime($last_mt_update) > (TIMENOW - 3600))
	stderr($tracker_lang['error'], "�� ��������� �������� ������������ ������� �����. ��������� ��� ������ �� ���� 1 ���� � ���.");

$anns_r = sql_query('SELECT info_hash, url FROM torrents_scrape WHERE tid = '.$tid);

$s_sum = $l_sum = $errors = $success = 0;

while ($ann = mysql_fetch_array($anns_r)) {
	try {
		if (substr($ann['url'], 0, 6) == 'udp://')
			$data = $udp->scrape($ann['url'], $ann['info_hash']);
		else
			$data = $http->scrape($ann['url'], $ann['info_hash']);
		$data = $data[$ann['info_hash']];
		
		sql_query('UPDATE torrents_scrape SET state = "ok", error = "", seeders = '.intval($data['seeders']).', leechers = '.intval($data['leechers']).' WHERE tid = '.$tid.' AND url = '.sqlesc($ann['url'])) or sqlerr(__FILE__,__LINE__);
		$s_sum += $data['seeders'];
		$l_sum += $data['leechers'];
		$success++;
	} catch (ScraperException $e) {
		/*echo('Error: ' . $e->getMessage() . "<br />\n");
		echo('Connection error: ' . ($e->isConnectionError() ? 'yes' : 'no') . "<br />\n");*/
		sql_query('UPDATE torrents_scrape SET state = "error", error = '.sqlesc($e->getMessage()).', seeders = 0, leechers = 0 WHERE tid = '.$tid.' AND url = '.sqlesc($ann['url'])) or sqlerr(__FILE__,__LINE__);
		$errors++;
	}
}

$visible = ($s_sum > 0);
if (!$visible && $cur_visible == 'no')
	$visible = 'no';
else
	$visible = 'yes';

sql_query('UPDATE torrents SET remote_seeders = '.$s_sum.', remote_leechers = '.$l_sum.', last_action = NOW(), last_mt_update = NOW(), visible = '.sqlesc($visible).' WHERE id = '.$tid) or sqlerr(__FILE__,__LINE__);

header('Refresh: 3;url=details.php?id='.$tid);
stderr($tracker_lang['success'], "���������� ������������� ��������� �������. �������: $success ������: $errors");

?>