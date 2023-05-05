<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="" method="post">
		<h1>Bank</h1>
		<h2>Money:</h2>
		<input type="text" name="mon">
		<h2>Time:</h2>
		<select name="time" id="">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		<h2>Precent:</h2>
		<input type="radio" name="pr" value="10">10
		<p><input type="radio" name="pr" value="20">20</p>
		<h2>Vip</h2>
		<input type="checkbox" name="v">
		<p><input type="submit"></p>
		<hr>
	</form>
</body>

</html>
<?php
if(isset($_POST['mon'])){
$money = (int)$_POST['mon'];
$time = (int)$_POST['time'];
$pr = $_POST['pr'];
$percent = $money * (+$_POST['pr']) / 100 * $time;
if (isset($_POST['v'])) {
	$pr = $_POST['pr'] * 2;
	$percent = $money * (+$_POST['pr'] * 2) / 100 * $time;
	$money += $percent;
} else {
	$money += $percent;
}
}
if (!empty($_POST)) {
	$count = $money;
}
echo '<h3>';
if (!empty($_POST)) {
	echo 'Ваши $' . $_POST['mon'] . ' ' . 'после' . ' ' . $_POST['time'] . ' ' . 'месяцев под' . ' ' . $pr . '% ' . 'станет $' . ' ' . round($count);
	echo '</h3>';
}
?>