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
            if(isset($_POST['name'])){
                $_SESSION['name']=$_POST['name'];
            }
        ?>
        <form method="post">
            <input type="text" name="name">
            <input type="submit">
        </form>
        
    </body>
</html>