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
        $arr=['a','b','c','d','e'];
        if(empty($_GET)){
            foreach($arr as $value){
                echo '<a href="http://PHP_EX_2/ex5/?lab='.$value.'">'.$value.'</a><br>';
            }
        }
        else{
            echo $_GET['lab'];
        }
        ?>
    </body>
</html>