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
            setcookie('name','User');
            if(isset($_COOKIE['name'])){
                echo 'Hello '.$_COOKIE['name'];
            }
        ?>
        
    </body>
</html>