<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- <?php
        // session_start();
        // $_SESSION['name']='kate';
        // $_SESSION['age']=17;
        // echo '<pre>';
        // var_dump($_SESSION);
        // echo '</pre>';
        ?> -->
        <?php
            session_start();
            if(isset($_POST['name'])){
                $_SESSION['name']=$_POST['name'];
            }
            var_dump($_SESSION);
        ?>
        <h1>Hello! You  are on index</h1>
        <form action="" method="post">
            <input type="text" name="name" value="<?= isset($_POST['name'])?$_POST['name']:'' ?>">
            <input type="submit">
        </form>
    </body>
</html>