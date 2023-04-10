<?php
$array = array(1, 2, 3, 4,  5, 6, 7, 8, 9, 10);
$nums = $array;
echo array_sum($nums)/count($nums);
?>
<br>
<?php
 echo str_word_count('Hello my world he');
?>
<br>
<?php
function fibo($i) { 
    if ($i == 0 ) return 0; 
    if ($i == 1 || $i == 2) { 
     return 1; 
    } else { 
     return fibo($i - 1) + fibo($i -2); 
    } 
   } 
    
    echo (fibo(5));
?>
<br>
<?php
function  day($d1, $d2)
{
    $d1_ts = strtotime($d1);
    $d2_ts = strtotime($d2);

    $seconds = abs($d1_ts - $d2_ts);
    
    return floor($seconds / 86400);
}

echo day('2004-08-01 15:34:12', '2004-08-04 18:21:32');
?>