<?php

class lang implements arrayaccess {
	private $tlr = array();
	public function __construct() {
		$this->tlr = array(
			'language_charset' => 'windows-1251',
			'page_generated' => "Page generated in %f seconds with %d queries (%s%% PHP / %s%% MySQL)",
			'unknown' => '����������',
			'access_denied' => '������ ��������.',
			'account_activated' => '������� �����������',
			'active' => '��������',
			'add_comment' => '�������� �����������',
			'add_user' => '�������� ������������',
			'added' => '��������',
			'age' => '�������',
			'contactus' => '��������� � ����',
			'external_torrent' => '��������������� �������',
			'external_torrent_update' => '��������������� ������� (�������� ����������)',
			'new_torrents_stats' => '�������: %d, ������: %d',
			'help_seed' => '������ ���, ��� ������� �������!!!',
			'no_need_seeding' => '��� ���������, ������� ����� ���������',
			'signup_users_limit' => '������� ����� ������������� (%d) ���������. ���������� ������������ ��������� ���������, ���������� ��������� �������...',
			'signup_signup' => '�����������',
			'signup_already_registered' => '�� ��� ������������������ ������������ %s!',
			'signup_not_selected' => '---- �� ������� ----',
			'signup_use_cookies' => '��� ���������� ����������� ������������� cookies.',
			'signup_username' => '������������',
			'signup_password' => '������',
			'signup_password_again' => '��������� ������',
			'signup_email' => 'Email',
			'signup_email_must_be_valid' => 'Email ����� ������ ���� ������.	��� ������� �������������� ������, �� ������� �� ������ �������������. ��� email ������ �� ����� �����������.',
			'signup_gender' => '���',
			'signup_male' => '������',
			'signup_female' => '�������',
			'signup_contact' => '��������',
			'signup_i_have_read_rules' => '� ��������(�) <a href="rules.php" target="_blank">�������</a>',
			'signup_i_will_read_faq' => '� ���� ������ <a href="faq.php" target="_blank">����</a> ������ ��� �������� �������',
			'signup_i_am_13_years_old_or_more' => '��� 13 ��� ��� ������',
			'signup_disabled' => '��������, �� ����������� ��������� ��������������',
			'dad' => '������ ������ � ����� ����� �� ��������',
			'news_added' => '���������',
			'news_poster' => '�����',
			'my_my' => '������ ����������',
			'my_updated' => '������� �������!',
			'my_mail_sent' => '�������������� ������ ����������!',
			'my_mail_updated' => 'E-mail ����� ��������!',
			'my_torrents' => '��� ��������',
			'my_unset' => '�� �������',
			'my_allow_pm_from' => '��������� �� ��',
			'my_parked' => '������� �����������',
			'my_you_can_park' => '�� ������ ������������ ��� ������� �� ��������� �������� ��-�� ������������, �������� ���� �� ������ ��������. �� ����� ��� ������� �����������, ��� ����� ���������� ��������� �������, �������� �������� ��� ������� ���������',
			'my_delete_after_reply' => '������� �� ��� ������',
			'my_sentbox' => '��������� ������������ ��',
			'my_email_notify' => '����������� �� email',
			'my_default_browse' => '��������� ��������� �� ���������',
			'my_style' => '��� ����������',
			'my_country' => '������',
			'my_language' => '����',
			'my_avatar_url' => '����� �������',
			'my_gender' => '���',
			'my_gender_male' => '������',
			'my_gender_female' => '�������',
			'my_year' => '���',
			'my_month' => '�����',
			'my_day' => '����',
			'my_months_january' => '������',
			'my_months_february' => '�������',
			'my_months_march' => '����',
			'my_months_april' => '������',
			'my_months_may' => '���',
			'my_months_june' => '����',
			'my_months_jule' => '����',
			'my_months_august' => '������',
			'my_months_september' => '��������',
			'my_months_october' => '�������',
			'my_months_november' => '������',
			'my_months_december' => '�������',
			'my_birthdate' => '���� ��������',
			'my_contact' => '������� ���������� ���������',
			'my_contact_descr' => '���� �� ������, ����� ������ ���������� ����� ������ ��������� � ����, ������� ���� ������ � ��������� �������� ������� ���������',
			'my_contact_icq' => '����� ICQ',
			'my_contact_aim' => '��� � AIM',
			'my_contact_msn' => '��� MSN',
			'my_contact_yahoo' => '��� � Yahoo!',
			'my_contact_skype' => '��� � Skype',
			'my_contact_mirc' => '��� � mIRC!',
			'my_website' => '����',
			'my_torrents_per_page' => '��������� �� ��������',
			'my_topics_per_page' => '��� �� ��������',
			'my_messages_per_page' => '��������� �� ��������',
			'my_show_avatars' => '���������� �������',
			'my_info' => '����������',
			'my_userbar' => '�������',
			'my_userbar_descr' => '��� ���� �������. �� ������ ��������� ��� � ������� �� ������.<br />������������� ������ ����� ����� ���� ������� �� ����� �������, � ���� �� ��� ��������� � ������ �� ��� ������ - ��� ������ ������� �� ��� ������ ������ ����� �� ��������.<br /><br />��� ���� <b>BB-���</b> ��� ������� � ������� �� �������',
			'my_mail' => 'Email',
			'ago' => '�����',
			'all_types' => '��� ����',
			'already_bookmarked' => ' ��� � ���������.',
			'announce_invalid' => '��������',
			'unknown_passkey' => '����������� �������!',
			'announce_invalid_passkey' => '�������� �������! ����������� ������� .torrent � $DEFAULTBASEURL',
			'announce_invalid_port' => '�������� ����',
			'announce_missing_parameter' => '����������� ��������',
			'announce_not_authorized' => '�� ��������������',
			'announce_read_faq' => '������� ����',
			'announce_torrent_not_registered' => '������� �� ��������������� �� �������',
			'announce_url' => 'Announce URL �������',
			'announce_you_can_leech_only_from_one_place' => '����� ���������� ��������! �� ������ ������ ������ � ������ �����.',
			'antirespect' => '�����������',
			'at' => '�',
			'avatar' => '������',
			'avatar_adress_invalid' => '�������� ����� �������.',
			'avatar_is_too_big' => '������� ����� ������� ��������� %dx%d ��������, ��������� �� � ����� ����������� ���������!',
			'avialable_formats' => '���������� �������',
			'back' => '�����',
			'banned' => '�������',
			'bans' => '����',
			'bitbucket' => '�������� ��������',
			'blank_vote' => '������ ����� (� ������ ���� ������� ����������!)',
			'block' => '����������',
			'blocked_list' => '������ ������',
			'bookmark_this' => '� ��������',
			'bookmark' => '�������� � ���������',
			'bookmarked' => ' �������� � ��������.',
			'bookmarks' => '��������',
			'browse' => '��������',
			'bytes' => '����',
			'change' => '��������',
			'choose' => '��������',
			'class_administrator' => '�������������',
			'class_moderator' => '���������',
			'class_power_user' => '������� ������������',
			'class_sysop' => '��������',
			'class_uploader' => '��������',
			'class_user' => '������������',
			'class_vip' => 'VIP',
			'client' => '������',
			'clients_recomened_by_us' => '������� ������������� ����',
			'clock' => '�����',
			'close_list' => '������� ������',
			'comment' => '�����������',
			'comment_cant_be_empty' => '����������� �� ����� ���� ������!',
			'comments' => '����.',
			'comments_for' => '����������� �',
			'comms' => '������������: %d',
			'community' => '����������',
			'completed' => '��������',
			'confirmation_mail_sent' => '�������������� ������ ���������� �� �������� ���� ����� (%s). ��� ���������� ��������� � ������������� �� ������ ������ ��� �� ������� ������������ ��� �������. ���� �� ����� �� ��������, ����� ������� ����� ������������� ������ ����� ��������� ����.',
			'connected' => '�&nbsp;�������',
			'connection_limit_exceeded' => '����� ���������� ��������!',
			'create' => '�������',
			'date' => '����',
			'dead' => '�������',
			'delete' => '�������',
			'delete_marked_messages' => '������� ��������� ���������',
			'deleted' => '������',
			'description' => '��������',
			'design' => '�����',
			'details_leeching' => '��������',
			'details_seeding' => '���������',
			'details_10_last_snatched' => '10 ��������� ���������',
			'details_10_last_snatched_noone' => '��� ����� �� ������ ���� �������',
			'dl_speed' => '�������',
			'download' => '�������',
			'magnet' => '������� ����� magnet',
			'downloaded' => '������',
			'downloading' => '� �������',
			'dox' => '�����-�������',
			'dox_called_already_exists' => '���� �������� <b>%s</b> ��� ����������!',
			'dox_cannot_delete' => '�� ���� ������� ����: <b>%s</b>. �� ������ �������� �������������� �� ������.',
			'dox_cannot_move' => '�� ���� ����������� ����. �� ������ �������� �������������� �� ������.',
			'dox_date' => '����',
			'dox_downloaded' => '�������',
			'dox_file_already_exists' => '���� � ������ <b>%s</b> ��� ����������!',
			'dox_filename' => '��������',
			'dox_no_files' => '������ �� �������.',
			'dox_nothing_received' => '������ �� ��������! �������� ���� ������� �� �������� ��������� - ������� �������.',
			'dox_size' => '������',
			'dox_time' => '�����',
			'dox_title' => '�����-�������',
			'dox_upload' => '���������',
			'dox_upload_file' => '��������� ����',
			'dox_uploader' => '��������',
			'dox_warning' => '��������',
			'edit' => '�������������',
			'edited' => '�������� ��������������!',
			'error' => '������',
			'faq' => '����',
			'file_list' => '������ ������',
			'files' => '������',
			'files_l' => '������',
			'filled' => '��������?',
			'filled_by' => '��������',
			'formats' => '������� ������',
			'forum' => '�����',
			'friend' => '�����',
			'friends_list' => '������ ������',
			'from' => '��',
			'from_system' => '���������',
			'gender' => '���',
			'getdox_file_not_found' => '���� �� ������',
			'getdox_no_file' => '��� ����� �����',
			'go' => '������',
			'go_go_go' => '�������',
			'go_to' => '�������',
			'golden' => '������� �������',
			'silver' => '���������� �������',
			'golden_descr' => '������� ������� (��������� ������ �������, ������� �� �����������)',
			'golden_torrents' => '������� ��������',
			'guests_online' => '����� ������',
			'hide_filled' => '�������� �����������',
			'hits' => '����',
			'homepage' => '�������',
			'idle' => '�����������',
			'image' => '��������',
			'images' => '���������',
			'img_poster' => '������',
			'in' => '�',
			'inbox' => '��������',
			'including_dead' => '������� �������',
			'info_hash' => '��� ������',
			'invalid_id' => '�������� �������������.',
			'invalid_ip' => '�������� IP �����.',
			'invite' => '����������',
			'is' => '�',
			'last_registered_user' => '��������� ������������������ ������������',
			'last_seen' => '��������� ��� ��� � ���� ',
			'leechers' => '���',
			'leechers_l' => '��������',
			'leeching' => '������',
			'loading' => '��������...',
			'log' => '������',
			'login' => '����',
			'logout' => '�����',
			'lower_class' => '�� ��������� ��� ����� ������ �������. ������� ���� ��� ��������.',
			'mail_read' => '�����������',
			'mail_read_desc' => '����������� ���������',
			'mail_unread_desc' => '������������� ���������',
			'main_menu' => '������� ����',
			'make_request' => '������� ������',
			'mark' => '��������',
			'mark_all' => '�������� ���',
			'mark_as_read' => '�������� ���������� ��������� ��� �����������',
			'mark_read' => '���������',
			'max_avatar_size' => '������� �������� ������ ���� �� ����� %dx%d ��������.',
			'max_file_size' => '������������ ������ �����',
			'messages' => '���������',
			'missing_form_data' => '��������� ��� ���� �����.',
			'monitor_comments' => '������� �� �������������',
			'monitor_comments_disable' => '��������� ��������',
			'my' => '������ ����������',
			'my_bonus' => '��� �����',
			'my_torrents' => '��� ��������',
			'name' => '��������',
			'need_seeds' => '������, ������� ����� ���������',
			'neighbours' => '������',
			'never' => '�������',
			'new_offers' => '����� �����������',
			'new_pm' => '(%d �����)',
			'new_pms' => '� ��� %d �����(��) ���������(��)!',
			'new_torrents' => '����� ��������',
			'news' => '�������',
			'next' => '������',
			'no' => '���',
			'no_blocked' => '� ��� ��� ������',
			'no_choose' => '�� �������',
			'no_comments' => '��� ������������',
			'no_fields_blank' => '�� ���������� ������ �����.',
			'no_friends' => '� ��� ��� ������',
			'no_messages' => '��� ���������',
			'no_offers' => '��� �����������',
			'no_online_users' => '�� ���� �������� ������������� �� ��������� 15 �����.',
			'no_polls' => '��� �������',
			'no_news' => '��� ��������',
			'no_seeds' => '��� �����',
			'no_subject' => '��� ����',
			'no_torrent_with_such_id' => '��� �������� � ����� ID.',
			'no_torrents' => '��� ���������',
			'no_votes' => '��� �������',
			'none_voted' => '��� �������',
			'none_yet' => '�����',
			'not_enough_votes' => '��� ��� (����� ����-�� %d �������. �������: ',
			'nothing_found' => '������ �� �������',
			'now' => '������',
			'offers' => '�����������',
			'official' => '�����������',
			'offline' => '��������',
			'old_polls' => '������� ������',
			'online' => '�������',
			'online_users' => '����� ������',
			'only_dead' => '������ �������',
			'only_votes' => '������ %d �������',
			'open_list' => '���������� ������',
			'optional' => '�� �����������.',
			'outbox' => '������������',
			'password' => '������',
			'password_mismatch' => '������ �� ���������.',
			'path' => '����',
			'peers_l' => '�����',
			'personal_lists' => '��� ������',
			'pm' => '��',
			'poll' => '�����',
			'port_open' => 'NAT',
			'prev' => '�����',
			'profile' => '�������',
			'rating' => '������',
			'ratio' => '�������',
			'receiver' => '����������',
			'repeat_password' => '������ ������',
			'request' => '������',
			'requester' => '��������',
			'requests' => '�������',
			'requests_section' => '������ ��������',
			'respect' => '�������',
			'rules' => '�������',
			'said_thanks' => '�������&nbsp;�������',
			'search' => '�����',
			'search_btn' => '������',
			'search_requests' => '������ �������',
			'search_results_for' => '���������� ������ ���',
			'seeder' => '���������',
			'seeder_last_seen' => '��������� ��� ��� �����',
			'seeders_l' => '���������',
			'seeding' => '��������',
			'seeds' => '���',
			'sender' => '�����������',
			'server_load' => '�������� �� ������',
			'show_all' => '�������� ���',
			'show_data' => '�������� ������',
			'show_my_requests' => '���������� ��� �������',
			'signup' => '�����������',
			'signup_successful' => '�������� �����������',
			'size' => '������',
			'snatched' => '������',
			'staff' => '�������������',
			'statistic' => '����������',
			'subject' => '����',
			'subscribe_last_comment' => '��������� ���������',
			'subscribe_list' => '���� ��������',
			'subscribe_no' => '��� ����� ����������� � �����, �� ������� �� ���������.',
			'success' => '�������',
			'successful_upload' => '�������� �������!',
			'sure_mark_delete' => '�� �������, ��� ������ ������� ��������� ���������?',
			'sure_mark_read' => '�� �������, ��� ������ �������� ��������� ��������� ��� �����������?',
			'sysop_account_activated' => '��� ������� �����������! �� ������������� �����. ������ �� ������ <a href="%s/"><b>������� �� �������</b></a> � ������ ������������ ��� �������.',
			'sysop_activated' => '������� �������������� ������� �����������',
			'taken_from_torrent' => '������� �� ��������. <b>����������, ����������� �������� �����.</b>',
			'thanks' => '�������',
			'thanks_added' => '������� ���������!',
			'thanks_for_registering' => '������� ��� ������������������ �� %s! ������ �� ������ <a href="login.php">�����</a> � �������.',
			'this_account_activated' => '���� ������� ��� �����������. �� ������ <a href="login.php">�����</a> � ���.',
			'times' => '���',
			'topten' => '��� 10',
			'torrent' => '�������',
			'torrent_clients' => '������� �������',
			'torrent_details' => '������ ��������',
			'torrent_file' => 'Torrent ����',
			'torrent_info' => '������ � ��������',
			'torrent_name' => '��������',
			'torrent_not_selected' => '������� �� ������!',
			'torrents' => '��������',
			'total' => '�����',
			'tracker_dead_torrents' => '������� ���������',
			'tracker_leechers' => '��������',
			'tracker_peers' => '�������� �����������',
			'tracker_seed_peer' => '���������/�������� (%)',
			'tracker_seeders' => '���������',
			'tracker_torrents' => '���������',
			'external_seeders' => '������� ���������',
			'external_leechers' => '������� ��������',
			'ttl' => 'TTL',
			'type' => '���',
			'ul_speed' => '�������',
			'unable_to_create_account' => '���������� ������� �������. �������� ��� ������������ ��� ������.',
			'unable_to_read_torrent' => '���������� ��������� ������� ����.',
			'upload' => '���������',
			'upload_torrent' => '��������� �������',
			'uploaded' => '������',
			'uploadeder' => '�������',
			'user' => '����',
			'user_menu' => '������������ ����',
			'username' => '�����',
			'users' => '������������',
			'users_disabled' => '�����������',
			'users_registered' => '������������������',
			'users_unconfirmed' => '����������������',
			'users_uploaders' => '����������',
			'users_vips' => 'VIP',
			'users_warned' => '��������������',
			'views' => '����������',
			'visible' => '�������',
			'vote' => '�������������',
			'vote_1' => '������!',
			'vote_2' => '�����',
			'vote_3' => '���������',
			'vote_4' => '������',
			'vote_5' => '�������!',
			'voted' => '����� ��������!',
			'votes' => '�������',
			'wait' => '��������',
			'welcome_back' => '������, ',
			'whos_online' => '��� ������',
			'with' => '�',
			'wrote_at' => '����� �',
			'yes' => '��',
			'you_can_start_seeding' => '�� ������ �������� �������. <b>������</b> ��� ������� �� ����� ����� ���� �� �� ������� ���������!',
			'you_have_no_bookmarks' => '� ��� ��� ��������!',
			'you_have_voted_for_this_torrent' => '�� ������� ���� ������� ���',
			'you_want_to_delete_x_click_here' => '�� ������ ������� %s. ������� <a href=%s>����</a> ���� �� �������.',
			'your_ip' => '��� IP',
		);
	}

    public function offsetSet($offset, $value) {
        $this->tlr[$offset] = $value;
    }
    public function offsetExists($offset) {
        return isset($this->tlr[$offset]);
    }
    public function offsetUnset($offset) {
        unset($this->tlr[$offset]);
    }
    public function offsetGet($offset) {
        return isset($this->tlr[$offset]) ? $this->tlr[$offset] : 'NO_LANG_'.strtoupper($offset);
    }
}

$tracker_lang = new lang;

?>