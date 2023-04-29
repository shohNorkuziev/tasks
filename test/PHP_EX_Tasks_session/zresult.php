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
        $sum=0;
        if($_SESSION['task1']==2){
            $sum+=1;
            echo"<style>.ex1{color:green;}</style>";
        }
        else{
            echo"<style>.ex1{color:red;}</style>";
        }
        if($_SESSION['task2']==3){
            $sum+=1;
            echo"<style>.ex2{color:green;}</style>";
        }
        else{
            echo"<style>.ex2{color:red;}</style>";
        }
        if($_POST['task3']==4){
            $sum+=1;
            echo"<style>.ex3{color:green;}</style>";
        }
        else{
            echo"<style>.ex3{color:red;}</style>";
        }
        ?>
        <h2>Правильных ответов <?echo $sum?>/3</h2>
        <h4 class="ex1">Задание 1</h4>
        <h4 class="ex2">Задание 2</h4>
        <h4 class="ex3">Задание 3</h4>
    </body>
</html>