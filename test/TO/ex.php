<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
            $temp_rand=[
                "январь"=>0,
                "февраль"=>0,
                "март"=>0,
                "апрлель"=>0,
                "май"=>0,
                "июнь"=>0,
                "июль"=>0,
                "август"=>0,
                "сентябрь"=>0,
                "октябрь"=>0,
                "ноябрь"=>0,
                "декабрь"=>0,
            ];
            $temp=[
                    'Cuba'=>$temp_rand,
                    'Trinidad'=>$temp_rand,
                    'Jamaica'=>$temp_rand,
                    'Haiti'=>$temp_rand,
            ];
            $array=$temp_rand;
            foreach ($temp as $country =>&$values){
                echo " $country :<br>";
                foreach ($values as $key =>&$item){
                    $item=mt_rand(20,40);
                    echo "$key = $item <br>";
                    if ($temp[$country][$key]>$array[$key]){
                        $array[$key]=$temp[$country][$key];
                    }
                }
                echo "<br>";
            }
            echo "<br>";
            print_r($array);
            echo "<br>";
            foreach ($array as $m=>$key){
                echo "$m = $key <br>";
            }
        ?>
    </body>
</html>