<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор языка</title>
    <style>
        body {
            background-color: #1c1c1c;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            text-align: center;
        }
        h1 {
            margin-top: 50px;
        }
        form {
            margin-top: 30px;
        }
        p {
            display: inline-block;
            margin: 0 10px;
        }
        input[type="radio"] {
            margin: 0 5px;
        }
        input[type="submit"] {
            margin-top: 20px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
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
                echo '<p>Вы не указали язык</p>';
            }
            else{
                if($_POST['language']==1){
                    echo '<p>Айм Рашн</p>';
                }
                else{
                    echo '<p>Ya Amerikanec</p>';
                }
            }
        }
        ?>
    </div>
</body>
</html>