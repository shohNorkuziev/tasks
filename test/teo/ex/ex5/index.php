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
        session_start();
        if(isset($_SESSION["time"])){
            echo "Последний раз вы заходили ".$_SESSION["time"];
        }
        $_SESSION["time"]=date('Y-m-d H:i:s');
        ?>
    </body>
</html>