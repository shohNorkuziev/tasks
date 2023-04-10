<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Задача-1</h1>
    <?php
$str="php";
echo strtoupper($str);

?>
<h1>Задача-2</h1>
<?php
$str="Норкузиев Шохрух Фарходжонович";
$array =explode(" ", $str);
echo $array[1]. " " .$array[0];
?>
<h1>Задача-3</h1>
<?php
$str="Привет мир";
echo substr_count( $str, "и")
?>
<h1>Задача-4</h1>
<?php
$str="html css php";
echo mb_substr($str, 0, 4) ."<br/>";
echo mb_substr($str, 5, 3) ."<br/>";
echo mb_substr($str, 9, 3);
?>
<h1>Задача-5</h1>
<?php
$str = 'shoh.png';
if (substr($str, 4) == '.png')
    echo "Да";
else
    echo "Нет";
?>
<h1>Задача-6</h1>
<?php
$str ='my world ';
if (strlen($str) > 5)
    $last = substr($str, 0, 5).'...';
else
    $last = $str;
echo $last;
?>
<h1>Задача-7</h1>
<?php
$str = "abc about abc";
echo str_replace(array("a","b","c"),array("1","2","3"), $str )
?>
<h1>Задача-8</h1>
<?php
$str = "abc abc abc";
echo strrpos($str, 'b');
?>
<h1>Задача-9</h1>
<?php
$str = 'html css php';
$arr = explode(' ', $str);
var_dump($arr);
?>
<h1>Задача-10</h1>
<?php
$data_1 = strtotime("2022-02-15");
$data_2 = strtotime("2022-02-16");
$datediff = $data_1 - $data_2;

echo $datediff;

?>
<h1>
    Задача 1,1
</h1>
<?php
$student = 10;
$mas = mt_rand(2,5);
$fiz = mt_rand(2,5);
$him = mt_rand(2,5);
$inf = mt_rand(2,5);
echo $mas , $fiz, $him , $inf;

?>
</body>
</html>


