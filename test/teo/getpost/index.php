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
        print_r($_POST);
        ?>
        <form action="/getpost/result.php" method="post">
            <p>
                Логин:<input type="text" name="login">
            </p>
            <p>
                Пароль:<input type="password" name="password">
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
        
    </body>
</html>