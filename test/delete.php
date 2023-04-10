<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Удаление</title>
</head>

<body>
<?php
require 'scripts/connect.php';
$id = $_REQUEST['user'];
$delete_sql = "DELETE FROM users WHERE id=$id";
mysql_query($delete_sql) or 
die("<p>При удалении проезошла ошибка</p>". mysql_error());
echo "<p>Запись была успешно удалена!</p>";
?>
<a href="info_form.html">Добавить пользователя</a><br/><br/>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="select_change.php">Вернуться к выбору записей для редактирования</a><br/><br/>
<a href="select_delete.php">Удалить пользователя</a><br/><br/>
</body>
</html>