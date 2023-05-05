<style>
	form {
		padding-left: 15px;
		border-style: solid;
		border-width: 3px;
		width: 25%;
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
	<form action="check.php" method="post">
		<h1>Интернет пакет</h1>
		<p> Минуты: <input type="text" name="min"></p>
		Гигабайты: <input type="text" name="gbt">
		<h2>Дополнительный функционал:</h2>
		SMS <input type="checkbox" value="SMS" name="dop[]" id="">
		<h2>Приложения:</h2>
		Telegram <input type="checkbox" value="Telegram" name="dop[]" id="">
		WhatsApp <input type="checkbox" value="WhatsApp" name="dop[]" id="">
		Viber <input type="checkbox" value="Viber" name="dop[]" id="">
		Skype <input type="checkbox" value="Skype" name="dop[]" id="">
		<h2>Соцальные сети:</h2>
		<p>VK <input type="checkbox" value="VK" name="dop[]" id=""></p>
		<p>OK <input type="checkbox" value="OK" name="dop[]" id=""></p>
		<p><input type="submit"></p>

	</form>
</body>

</html>