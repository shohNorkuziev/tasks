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
            $_SESSION['task2']=$_POST['task2'];
        ?>
        <form action="zresult.php" method="post">
            <h2>Задание 3</h2>
            <p>1+3=<input type="text" name="task3"></p>
            <input type="submit">
        </form>
    </body>
</html>