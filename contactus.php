<?php

require_once('include/bittorrent.php');
dbconn();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($use_captcha) {
		$b = get_row_count('captcha', 'WHERE imagehash = '.sqlesc($_POST['imagehash']).' AND imagestring = '.sqlesc($_POST['imagestring']));
		sql_query('DELETE FROM captcha WHERE imagehash = '.sqlesc($_POST['imagehash'])) or die(mysql_error());
		if ($b == 0)
			stderr($tracker_lang['error'], '�� ����� ������������ ��� �������������.');
	}

	if (!mkglobal('useremail:subject:message'))
		stderr($tracker_lang['error'], '�� �� ��������� ��� ���� �����! ��������� ����� � ���������� ��� ���.');

	if (!validemail($useremail))
		stderr($tracker_lang['error'], '��� �� ������ �� �������� email �����.');

$ip = getip();
$username = $CURUSER['username'] ? $CURUSER['username'] : 'unregged';
if ($CURUSER)
	$userid = $CURUSER['id'];
else
	$userid = 0;

$body = <<<EOD
��������� ����� �������� ����� �� {$website_name}:

--------------------------------

$message

--------------------------------

IP �����: {$ip}
��� ������������: {$username}
��� ������������: {$userid}
EOD;

	stdhead();
	if (sent_mail($admin_email, $useremail, $useremail, '�������� ����� �� '.$website_name.' - ' . $subject, $body, false))
		stdmsg('�������', '���� ��������� ���������� �������������.', 'success');
	else
		stdmsg('������', '���� ��������� <b>��</b> ���� ���������� �������������, ��-�� �������������� ������ �������.', 'error');
	stdfoot();

} else {
	stdhead('��������� � ����');
	if ($use_captcha) {
		include_once("include/captcha.php");
		$hash = create_captcha();
	}
?>
<form method="post" name="contactus" action="contactus.php" onsubmit="document.contactus.cbutton.value='���������� ��������� ...';document.contactus.cbutton.disabled=true">
<input type="hidden" name="do" value="process">
<table class="main" border="1" cellspacing="0" cellpadding="5" width="100%">
	<tr>
		<td align="left" class="colhead" colspan="2">
			��������� � ����
		</td>
	</tr>
	<tr>
		<td align="right" width="20%" valign="top">
			<b>��� Email:</b>
		</td>
		<td align="left" width="80%" valign="top">
			<input type="text" name="useremail" value="" size="30">
		</td>
	</tr>
	<tr>
		<td align="right" width="20%" valign="top">
			<b>����:</b>
		</td>
		<td align="left" width="80%" valign="top">
			<input type="text" name="subject" value="" size="30">
		</td>
	</tr>	
	<tr>
		<td align="right" width="20%" valign="top">
			<b>���������:</b>
		</td>
		<td align="left" width="80%" valign="top">
			<textarea name="message" cols="100" rows="10"></textarea>
		</td>
	</tr>
<? if ($use_captcha) { ?>
	<tr>
		<td align="right" width="20%" valign="top">
			<b>��� ������������:</b>
		</td>
		<td align="left" width="80%" valign="top">
			<input type="text" name="imagestring" value="" size="30">
			<p>����������, ������� ����� ������������ �� �������� �����.<br />���� ������� ������������� �������������� �����������.</p>
			<img id="captcha" src="captcha.php?imagehash=<?=$hash; ?>" alt="Captcha" ondblclick="document.getElementById('captcha').src = 'captcha.php?imagehash=<?=$hash; ?>&amp;' + Math.random();" /><br />
			<font color="red">��� ������������ � ��������</font><br />
			�������� ��� ���� �� ��������, ���-�� �������� ��������.
			<input type="hidden" name="imagehash" value="<?=$hash; ?>" />
		</td>
	</tr>
<? } ?>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="���������" name="cbutton">
			<input type="reset" value="��������">
		</td>
	</tr>
</table>
</form>
<?
	stdfoot();
}

?>