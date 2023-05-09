<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #1c1c1c;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        form {
            margin: 0 auto;
            width: 50%;
            text-align: center;
        }
        input[type="text"], input[type="radio"], input[type="submit"] {
            display: block;
            margin: 10px auto;
            padding: 5px;
            border-radius: 5px;
            border: none;
            background-color: #fff;
            color: #1c1c1c;
            font-size: 16px;
            font-weight: bold;
        }
        input[type="radio"] {
            display: inline-block;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <?php
        if(empty($_POST)){
    ?>
        <form action="" method="post">
            <p>Имя:</p>
            <input type="text" name="name">
            <p>Согласие:</p>
            <input type="radio" name="r" value="1">Согласен<br>
            <input type="submit">
        </form>
    <?php
    }
    else{
        if(empty($_POST['r'])){
            echo 'Пока '.$_POST['name'];
        }
        else{
            echo 'Теперь ты должен 100 тысяч зеленых нам, '.$_POST['name'];
        }
    }  
    ?>
</body>
</html>