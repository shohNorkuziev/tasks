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
        
        if(!isset($_POST['log'])){
    ?>
    <form action="" method="post">
            <input type="text" name="log">
            <input type="submit">
    </form>
    <?php  
    }
    else{
        if(isset($_POST['log'])){
            setcookie('log',$_POST['log'],time()+3600);
            echo 'Пользователь '.$_POST['log'].' был '.$_COOKIE['time'];
        }
        else{
            echo 'Пользователь '.$_COOKIE['log'].' был '.$_COOKIE['time'];
        }
    }
    
    setcookie('time',date('Y-m-d H:i:s'),time()+3600);
    ?>
    </body>
</html>