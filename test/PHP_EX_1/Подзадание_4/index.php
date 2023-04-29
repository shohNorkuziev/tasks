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
            <form action=" " method="post">
                <p>Напишиет свою дату рождения</p>
                <p>День:</p>
                <input type="number" name="d" min="1" max="31">
                <p>Месяц:</p>
                <input type="number" name="m" min="1" max="12">
                <p>Год:</p>
                <input type="number" name="y" min="1930" max="2023">
                <input type="submit">
            </form>
        <?php
        }
        else{
            
         $dates=[$_POST['y'].'-'.$_POST['m'].'-'.$_POST['d']];

         $days=['Воскресенье', 'Понедельник', 'Вторник', 'Среда',
         'Четверг', 'Пятница', 'Суббота'];
         foreach($dates as $d){
            echo 
               $days[ date("w", strtotime($d) )];
            }
        }  
        ?>
    </body>
</html>