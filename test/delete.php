<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��������</title>
</head>

<body>
<?php
require 'scripts/connect.php';
$id = $_REQUEST['user'];
$delete_sql = "DELETE FROM users WHERE id=$id";
mysql_query($delete_sql) or 
die("<p>��� �������� ��������� ������</p>". mysql_error());
echo "<p>������ ���� ������� �������!</p>";
?>
<a href="info_form.html">�������� ������������</a><br/><br/>
<a href="search_user.html">��������� � ������</a><br/><br/>
<a href="select_change.php">��������� � ������ ������� ��� ��������������</a><br/><br/>
<a href="select_delete.php">������� ������������</a><br/><br/>
</body>
</html>