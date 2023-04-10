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
        }
        .container{
            padding: 10px;
          width: fit-content;
          border: black solid;  
        }
        div{
            margin-right: 10px;
        }
    </style>
</head>
<body>
<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'exam';
$port = '3307';

$conn = mysqli_connect($hostname,$username,$password,$dbname,$port);
mysqli_set_charset($conn, 'utf8');

$arr = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM products"),MYSQLI_ASSOC);

foreach ($arr as $item){
    echo '<div class="container">'.' '.$item['name'].'<div>'.' цена:'.$item['price'].'</div>'.'</div>';
}
?>
</body>
</html>