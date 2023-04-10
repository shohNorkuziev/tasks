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
        setcookie('kol',2,time()+3600);
        if(isset($_COOKIE['kol'])){
            echo 'Вы зашли на наш сайт '.$_COOKIE['kol'].' раз';
            setcookie('kol',$_COOKIE['kol']+1,time()+3600);
        }  
        ?>
    </body>
</html>