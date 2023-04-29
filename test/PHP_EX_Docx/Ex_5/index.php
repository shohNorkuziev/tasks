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
            .dd{
                display: grid;
                grid-template-columns: 300px 260px;
            }
            .dd div{
                background: beige;
                border: 1px solid black;
                padding: 20px;
            }
            p{
                display: block;
            }
        </style>
        <form action="" method="post">
            <div class="dd">
                <div>
                    <input type="checkbox" name="type[]" value="1" checked>Время(t)
                </div>
                <div>
                    <p>
                        часы<br>
                        <input type="number" name="hour" min="0" required>
                    </p>
                    <p>
                        минуты<br>
                        <input type="number" name="min" min="0" max="59" required>
                    </p>
                    <p>
                        секунды<br>
                        <input type="number" name="sec" min="0" max="59" required>
                    </p>
                </div>

                <div>
                    <input type="checkbox" name="type[]" value="2" checked>Расстояние(s)
                </div>
                <div>
                <input type="number" name="distance" min="1" required>
                    <select name="dtype">
                        <option value="1">километр</option>
                        <option value="2">метр</option>
                    </select>
                </div>

                <div>
                    <input type="checkbox" name="type[]" value="3">Скорость(v)
                </div>
                <div>
                    <input type="number" name="speed" min="1" required>
                    <select name="stype">
                        <option value="1">километр в час(км\ч)</option>
                        <option value="2">метр в минуту(м\)мин</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="Отправить">
        </form>
        <?php
            if(!empty($_POST)){
                $time=($_POST['hour']*60*60)+($_POST['min']*60)+($_POST['sec']);
                if($_POST['dtype']==1){
                    $distance=$_POST['distance']*1000;
                }else{
                    $distance=$_POST['distance'];
                }
                if($_POST['stype']==1){
                    $speed=$_POST['speed']*1000/60/60;
                }else{
                    $speed=$_POST['speed']/60;
                }
                if(count($_POST['type'])==2){
                    if($_POST['type'][0]==1 && $_POST['type'][1]==2){
                        $speed=round($distance/$time,2);
                        echo 'Скорость '.$speed.' м/с';
                    }
                    if($_POST['type'][0]==1 && $_POST['type'][1]==3){
                        $distance=round($time*$speed);
                        echo 'Расстояние '.$distance.' м';
                    }
                    if($_POST['type'][0]==2 && $_POST['type'][1]==3){
                        $time=round($distance/$speed);
                        echo 'Время '.floor($time/3600).' часов '.floor(($time-(floor($time/3600)*3600))/60).' минут '.($time-(floor($time/60)*60)).' секунд';
                    }
                }else{
                    echo'Выберити только два параметра';
                }
            }
        ?>
    </body>
</html>