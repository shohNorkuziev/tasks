<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" href="style.css" type="text/css">
<title>����� ������������ ��� ��������������.</title>
</head>
<body>
<form action="edit.php" method="post">
<fieldset>
<?php
require 'scripts/connect.php';
$select_sql = "SELECT id, first_name, last_name FROM users";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
do
{
printf("<input type='radio' name='user' value='%s'>%s %s<br/><br/>", $row['id'], $row['first_name'],
 $row['last_name']);	
}
while($row = mysql_fetch_array($result))
?>
</fieldset>
<fieldset>
<input type="submit" value="������� �������">
</fieldset>
</form>
<a href="info_form.html">�������� ������������</a><br/><br/>
<a href="search_user.html">��������� � ������</a><br/><br/>
<a href="select_delete.php">������� ������������</a><br/><br/>
</body>
</html>