<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="result.php" method="post">
            <p>Логин:</p>
            <select name="login" >
                <option value="Фронтенд">Фронтенд</option>
                <option value="Тимлид">Тимлид</option>
                <option value="Бэкенд">Бэкенд</option>
            </select>
            <p>Пароль:</p>
            <input type="password" name="password"><br>
            <input type="submit">
        </form>
    </body>
</html>