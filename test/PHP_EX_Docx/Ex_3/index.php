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
            .container{
                width: 800px;
                margin: 0 auto;
                border: 1px solid black;
                padding: 20px;
            }
            .container:nth-child(),.container:not(:last-child){
                margin-bottom: 10px;
            }
            input{
                min-width: 100px;
            }
        </style>
        <div class="container">
            <h1>Bank</h1>
            <?php
                if(empty($_POST)){  
            ?>

            <form action="" method="post">
                <p>
                    <h3>
                        <label for="">Money:</label>
                    </h3>
                    <input type="number" min="10" name="money" required>
                </p>
                <p>
                    <h3>
                        <label for="">Time:</label>
                    </h3>
                    <input type="number" min="1" name="time" required>
                </p>    
                <p>
                    <h3>
                        <label for="">Percent:</label>
                    </h3>
                    <input type="radio" name="percent" value="10" required>10<br>
                    <input type="radio" name="percent" value="20" required>20
                </p>    
                <p>
                    <h3>
                        <label for="">Vip:</label>
                    </h3>
                    <input type="checkbox" name="vip" value="5">
                </p>                       
                    <input type="submit" value='Отправить'>
            </form>
            <h3>
            <?php
                }else{
                    echo'Ваши $'.$_POST['money'].' после '.$_POST['time'].' месяцев под ';
                    if(empty($_POST['vip'])){
                        echo $_POST['percent'].'% станет $';
                        $sum=$_POST['money'];
                        for($i=0;$i<$_POST['time'];$i++){
                            $sum=floor(($sum/100)*(100+$_POST['percent']));
                        }
                        echo $sum;
                    }else{
                        $percsum=$_POST['percent']+$_POST['vip'];
                        echo $percsum.'% станет $';
                        $sum=$_POST['money'];
                        for($i=0;$i<$_POST['time'];$i++){
                            $sum=floor(($sum/100)*(100+$_POST['percent']+$_POST['vip']));
                        }
                        echo $sum;
                    }
                }
            ?>
            </h3>
        </div>
    </body>
</html>