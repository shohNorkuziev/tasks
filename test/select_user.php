<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<?php
require 'scripts/connect.php';
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);

$sql_select = "SELECT * FROM users WHERE first_name='$first_name' && last_name='$last_name'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

if($row)
{
	printf("<p>������������: " .$row['first_name'] . " " .$row['last_name'] ."</p> 
	<p><i>���������� ������</i></p><p>E-mail: " .$row['email'] . "</p><p>Facebook: " .$row['facebook'] . "</p>---------<br/>"
	);
}
else{echo ("������������ � ����� ������ � ���� ���<br/><br/>");}


?>
<a href="search_user.html">��������� � ������</a><br/><br/>
<a href="info_form.html">�������� ������������</a><br/><br/>
<a href="select_change.php">������������� ������ ���� ������</a><br/><br/>
<a href="select_delete.php">������� ������������</a><br/><br/>
</body>
</html>