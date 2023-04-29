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
            $_SESSION['task1']=$_POST['task1'];
        ?>
        <form action="task3.php" method="post">
            <h2>Задание 2</h2>
            <p>1+2=<input type="text" name="task2"></p>
            <input type="submit">
        </form>
    </body>
</html>