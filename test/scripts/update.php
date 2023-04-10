<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Untitled Document</title>
</head>

<body>
<?php
require 'connect.php';
$id=$_REQUEST['id'];
$first_name=trim($_REQUEST['first_name']);
$last_name=trim($_REQUEST['last_name']);
$email=trim($_REQUEST['email']);
$facebook=trim($_REQUEST['facebook']);

$update_sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', facebook='$facebook' WHERE id='$id'";
mysql_query($update_sql) or die("Ошибка вставки" . mysql_error());
echo '<p>Запись успешно обновлена!</p>';
?>
<a href="../info_form.html">Добавить пользователя</a><br/><br/>
<a href="../search_user.html">Вернуться к поиску</a><br/><br/>
<a href="../select_change.php">Вернуться к выбору записей для редактирования</a><br/><br/>
</body>
</html>