<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>������ ����������</title>
</head>

<body>
<?php
require 'scripts/connect.php';
$id = $_REQUEST['user'];
$select_sql = "SELECT * FROM users WHERE id= $id";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
printf("<form action='scripts/update.php' method='post' name='forma'>
<fieldset>
<input type='hidden' name='id'  value='%s'><br/>
<label for='first_name'>���:</label><br/>
<input type='text' name='first_name' size='30' value='%s'><br/>
<label for='last_name'>�������:</label><br/>
<input type='text' name='last_name' size='30' value='%s'><br/>
<label for='email'>Email:</label><br/>
<input type='text' name='email' size='30' value='%s'><br/>
<label for='facebook'>Facebook</label><br/>
<input name='facebook' type='text'  size='30' value='%s'>
</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='������������� ������'><br/>
</fieldset>
</form>",$row['id'], $row['first_name'], $row['last_name'], $row['email'], $row['facebook']);
?>

<a href="info_form.html">�������� ������������</a><br/><br/>
<a href="search_user.html">��������� � ������</a><br/><br/>
<a href="select_change.php">��������� � ������ ������� ��� ��������������</a><br/><br/>
<a href="select_delete.php">������� ������������</a><br/><br/>
</body>
</html>