<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="get" action="/Задание_1/Подзадание_1/result.php">
            <p>Имя</p>
            <input type="text" name="text"><br>
            <p>Фамилия</p>
            <input type="textarea" name="textarea"><br>
            <p>Хобби</p>
            <input type="hidden" name="checkbox" value="Диванный образ жизни тоже">
            <p><input type="checkbox" name="checkbox" value="Волейбол"> волейбол</p>
            <p><input type="checkbox" name="checkbox" value="Тенис"> тенис</p>
            <p>Пол</p>
            <input type="hidden" name="radio" value="не знаете">
            <p><input type="radio" name="radio" value="мужчина"> Мужской</p>
            <p><input type="radio" name="radio" value="женщина"> Женский</p>
            <input type="submit">
        </form>
    </body>
</html>