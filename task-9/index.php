<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{text-decoration: none;
            color:white;
            background-color: black;
            width: 50px;
            height: 25px;
        }
        a:hover{
            background-color: AliceBlue;
            transition: 0.3s all;
        }
    </style>
</head>
<body>
    <?php
    // print_r($_GET);
    $image = isset($_GET['image'])? $_GET['image']:$_GET['image']=1;
    // echo $image;
    ?>
    <img src="image/<? echo $image?>.png" alt="images" width="500px" height="500px">
    <a href="index.php?image=<?=($image>1)?$image-1:5?>"><</a>
    <a href="index.php?image=<?=($image<5)?$image+1:1?>">></a>
</body>
</html>