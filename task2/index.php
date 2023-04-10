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
$temp_rand = ["Jan"=>0, "Feb"=>0, "Mar"=>0, "Apr"=>0, "Mai"=>0 ,"Jun"=>0, "Jul"=>0 ,"Aug"=>0 ,"Sep"=>0, "Oct"=>0,  "Nov"=>0, "Dec"=>0];
$temp = [
        'Cuba' => $temp_rand,
        'Trinidad' => $temp_rand,
        'Jamaica' => $temp_rand,
        'Haiti' => $temp_rand,
];
$array = $temp_rand;
foreach ($temp as $country => &$values){
    echo " $country : <br/>";
    foreach ($values as $key => &$item){
        $item = mt_rand(20 , 40);
        echo "$key =$item <br/>";
        if ($temp [$country][$key]>$array[$key]){
            $array[$key] = $temp[$country][$key];
        }
    }
    echo "<br/>";
//    echo "<pre/>";
//    print_r($array);
//    echo "<pre/>";
    foreach ($array as $temp_rand => $key)
    {echo "$temp_rand = $key<br/>";
    }
}


?>

</body>
</html>


