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
            
            print_r($_COOKIE);

        ?>
        <h1>Hello! You  are on index</h1>
        <form action="">
            <input type="text" name="name">
            <input type="submit">
        </form>
        
    </body>
</html>
<?php
    if(isset($_GET)){
        setcookie('name',$_GET['name'],time()+3600);
    }
    
?>