<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Выберите язык</h1>
        <form action="" method="post">
        <p>RU</p>
        <input type="radio" name="language" value="1">
        <p>EN</p>
        <input type="radio" name="language" value="2"><br>
        <input type="submit">
        </form>
        <?php
        if(!empty($_POST)){
            if(empty($_POST['language'])){
                echo 'Вы не указали язык';
            }
            else{
                if($_POST['language']==1){
                    echo 'Привет';
                }
                else{
                    echo 'Hello';
                }
            }
        }
        ?>
    </body>
</html>