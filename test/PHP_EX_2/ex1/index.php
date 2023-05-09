<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction:column;
        }
        form {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: none;
            background-color: #444;
            color: #fff;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
        if(empty($_POST)){
    ?>
    <h1>Поставьте дату</h1>
    <form action="" method="post">
        <p>day</p>
        <input type="text" value="<?php echo (date("j"));?>" name="day">
        <p>month</p>
        <input type="text" value="<?php echo (date("n"));?>" name="month">
        <p>year</p>
        <input type="text" value="<?php echo (date("Y"));?>" name="year"><br>
        <input type="submit">
    </form>
    <?php
        }
        else{
            $date_new=mktime(0,0,0,1,1,$_POST['year']+1);
            $date_sear=mktime(0,0,0,$_POST['month'],$_POST['day'],$_POST['year']);
            $time_raz=$date_new-$date_sear;
            $day=floor($time_raz/3600/24);
            echo "До нового года осталось ".$day." дней";
        }
    ?>
</body>
</html>