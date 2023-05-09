<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            color:white;
            background-color: black;
        }
    </style>
</head>
<body>
<?php
    if(empty($_POST['r'])){
        echo 'Доступ не разрешен';
    }
    else{
        echo 'Доступ  разрешен';
    }
?>            
</body>
</html>