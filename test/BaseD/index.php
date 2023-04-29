<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <style>
            .div{
                margin: 10px;
                padding: 5px;
                float: left;
                border: 1px solid green;
            }
        </style>
        
            <?php       
                $hostname='localhost';
                $username='root';
                $password='root';
                $dbname='bd_averin';
                $port='3307';
                $conn = mysqli_connect($hostname,$username,$password,$dbname,$port);                
                mysqli_set_charset($conn,'utf8');
                $arr=mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM product"),MYSQLI_ASSOC);                
                session_start();
                if(isset($_POST['name'])){
                    $_SESSION['name']=$_POST['name'];
                }else{
                  foreach($arr as $k){
                    echo '<div class="div"><form action="" method="post">';
                    foreach($k as $k2=>$v){
                        if($k2=='id'){
                            echo '<input type="hidden" name="name" value="'.$v.'">';
                        }
                        if($k2=='name'){
                            echo $v.'<br>';
                        }
                        if($k2=='price'){
                            echo 'цена : '.$v.'<br>';
                        }
                    }
                    echo'<input type="submit"></form></div>';
                    }  
                } 
                  
            ?> 
    </body>
</html>
