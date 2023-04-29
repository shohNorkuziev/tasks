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
        if(empty($_POST)){   
    ?>
    <form action="" method="post">
        <h1>Интернет_пакет</h1>
        <P >Минуты:</P>
        <input type="number" min="0" max="2000" name="min" required>
        <P >Гигабайты:</P>
        <input type="number" min="1" max="50" name="giga" required>   
        <h2>Дополнительный фуекционал:</h2> 
        <P >SMS</P>
        <input type="checkbox"  name="sms" >  
        <h2>Приложения</h2> 
        <P >Telegram</P>
        <input type="checkbox"  name="app[]" value="Telegram">
        <P >WhatsApp</P>
        <input type="checkbox"  name="app[]" value="WhatsApp">  
        <P >Viber</P>
        <input type="checkbox"  name="app[]" value="Viber">  
        <P >Skipe</P>
        <input type="checkbox"  name="app[]" value="Skipe">    
        <h2>Социальные сети</h2> 
        <P>VK</P>
        <input type="checkbox" name="co[]" value="VK">  
        <P>OK</P>
        <input type="checkbox"  name="co[]" value="OK"> <br>
        <input type="submit" value="Отправить">
    </form>
        
    <?php
        }else{
            $sum=200+$_POST['min']*0.3+$_POST['giga']*3.25-3.25;           
            if(!empty($_POST['sms'])){
                $sum+=50;
            }
            if(!empty($_POST['app'])){ 
                foreach($_POST['app'] as $x){
                if($x=='Telegram'){
                    $sum+=30;
                }
                if($x=='WhatsApp'){
                    $sum+=25;
                }
                if($x=='Viber'){
                    $sum+=20;
                }
                if($x=='Skipe'){
                    $sum+=15;
                }
            }}
            if(!empty($_POST['co'])){ 
                foreach($_POST['co'] as $x){
                    if($x=='VK'){
                        $sum+=35;
                    }
                    if($x=='OK'){
                        $sum+=30;
                    }
            }}
            
            echo "<p>Платеж ".$sum."р. на 30 дней</p><p>В пакет входит:</p><p>".$_POST['min']." Минут разговоров</p><p>".$_POST['giga']." ГБайт</p>";
            if(!empty($_POST['sms'])){
                echo"<p>Сообщения</p>";
            }
            if(!empty($_POST['app'])){ 
                echo"<p>Приложения:";
                foreach($_POST['app'] as $x){
                    if($x=='Telegram'){
                        echo" Telegram";
                    }
                    if($x=='WhatsApp'){
                        echo" WhatsApp";
                    }
                    if($x=='Viber'){
                        echo" Viber";
                    }
                    if($x=='Skipe'){
                        echo" Skipe";
                    }
                }
                echo"</p>";
            }
            if(!empty($_POST['co'])){ 
                echo"<p>Соц.сети:";
                foreach($_POST['co'] as $x){
                    if($x=='VK'){
                        echo" VK";
                    }
                    if($x=='OK'){
                        echo" OK";
                    }
                }
                echo"</p>";
            }
        }
    ?>
    </body>
</html>