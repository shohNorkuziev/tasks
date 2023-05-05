<style>
	body {
		padding-left: 15px;
		border-style: solid;
		border-width: 3px;
		width: 30%;
		height: 48%;
		font-size: larger;
	}
	h1 {
  		text-align: center;
  		font-size: 1.5rem;
 	}
 	h2 {
  		text-align: center;
  		font-size: 1.2rem;
  		margin-top: 20px;
		}
 	h3 {
  		font-size: 1rem;
  		margin-left: 20px;
  		margin-top: 10px;
 		}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	$dop = [
		'min' => 0.30,
		'gbt' => 3.25,
		'dop' => [
			'SMS' => 50,
			'Telegram' => 30,
			'WhatsApp' => 25,
			'Viber' => 20,
			'Skype' => 15,
			'VK' => 35,
			'OK' => 30
		]
	];
	$pricemin = 200;
	$min = 0.30;
	$gbt = 3.25;
	$sms = 50;
	$tg = 30;
	$wa = 25;
	$vr = 20;
	$se = 15;
	$vk = 35;
	$ok = 30;
	foreach ($_POST as $key => $value) {
		if ($key == 'dop') {
			foreach ($_POST[$key] as $k => $v) {
				$pricemin += $dop[$key][$v];
			}
		} else {
			$pricemin += $dop[$key] * (int)$value;
		}
	}
	echo '<h1>' . 'Платеж' . ' ' . $pricemin . 'р' . ' ' . 'на 30 дней' . '</h1>';

	echo '<h2>' . 'В пакет входит:' . '</h2>';
	echo '<h3>' . $_POST['min'] . ' ' . 'минут разговоров' . '</h3>';
	echo '<h3>' . $_POST['gbt'] . ' ' . 'ГБайт' . '</h3>';

	echo '<h3>';
	echo 'Дополнительный функционал:';
	if (!empty($_POST['dop'])) {
		foreach ($_POST['dop'] as $fun) {
			if ($fun == 'SMS') {
				echo $fun . ';';
			}
		}
	}
	echo '</h3>';

	echo '<h3>';
	echo  'Приложения:';
	if (!empty($_POST['dop'])) {
		foreach ($_POST['dop'] as $fun) {
			if ($fun == 'Telegram') {
				echo $fun . ';';
			}
		}
	}
	if (!empty($_POST['dop'])) {
		foreach ($_POST['dop'] as $fun) {
			if ($fun == 'WhatsApp') {
				echo $fun . ';';
			}
		}
	}
	if (!empty($_POST['dop'])) {
		foreach ($_POST['dop'] as $fun) {
			if ($fun == 'Viber') {
				echo $fun . ';';
			}
		}
	}
	if (!empty($_POST['dop'])) {
		foreach ($_POST['dop'] as $fun) {
			if ($fun == 'Skype') {
				echo $fun . ';';
			}
		}
	}
	echo '</h3>';

	echo '<h3>';
	echo 'Соц.сети:';
	if (!empty($_POST['dop'])) {
		foreach ($_POST['dop'] as $fun) {
			if ($fun == 'VK') {
				echo  $fun . ';';
			}
		}
	}
	if (!empty($_POST['dop'])) {
		foreach ($_POST['dop'] as $fun) {
			if ($fun == 'OK') {
				echo  $fun . ';';
			}
		}
	}
	echo '</h3>';
	?>
</body>

</html>