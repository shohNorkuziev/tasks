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
            if (empty($_POST)) {
        ?>
        <form action=" " method="post">
            <input type="text" name="log">
            <input type="text" name="password">
            <input type="submit">
        </form>
        <?php
         } 
         else {
            $_POST['password']=md5($_POST['password']);
        ?>
        <p>логин:<?=$_POST['log']?></p>
        <p>пароль:<?=$_POST['password']?></p>
        <?php
         }
        ?>
    </body>
</html>