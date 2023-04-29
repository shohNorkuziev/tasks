<?php
// print_r($_GET);
$img=isset($_GET['img'])?$_GET['img']:1;
// echo $img;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- <img src="img/<?php echo $img; ?>.png" alt="img" width="500px" > -->
        <img src="img/<?=$img?>.png" alt="img" width="500px" height="500px">
        <!-- <a href="index.php?img=<?=$img-1?>">назад</a>
        <a href="index.php?img=<?=$img+1?>">вперед</a> -->
        <a href="index.php?img=<?=($img>1)?$img-1:5?>">назад</a>
        <a href="index.php?img=<?=($img<5)?$img+1:1?>">вперед</a>
    </body>
</html>