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
            if(empty($_POST)){
        ?>
            <form action="" method="post">
                <p>Имя:</p>
                <input type="text" name="name">
                <p>Согласие:</p>
                <input type="radio" name="r" value="1"><br>
                <input type="submit">
            </form>
        <?php
        }
        else{
            if(empty($_POST['r'])){
                echo 'Пока '.$_POST['name'];
            }
            else{
                echo 'Привет '.$_POST['name'];
            }
        }  
        ?>
    </body>
</html>