<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="result.php">
        <p>Имя</p>
        <input type="text" name="name"><br>
        <p>пару строчек там писани</p>
        <input type="textarea" name="messages"><br>
        <p>Шаурма или Денер?</p>
        <input type="hidden" name="sha_den" value="Не любишь кушать🥺">
        <p><input type="checkbox" name="sha_den" value="Шаурма"> Шаурма</p>
        <p><input type="checkbox" name="sha_den" value="Денер"> Денер</p>
        <p>Ваш любимый язык программирования</p>
        <input type="hidden" name="language" value="лее, ты  кто?">
        <p><input type="radio" name="language" value="js"> js</p>
        <p><input type="radio" name="language" value="php"> php</p>
        <input type="submit">
    </form>
</body>

</html>