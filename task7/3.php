<?php
$m=array();
$max=0;
$check=true;
$pr=1;
for ($i=0;$i<5;$i++){
    $m[]=array();
    for($j=0;$j<6;$j++){
        $m[$i][$j]=mt_rand(1,9);
        $con=$j===5 ? "<br>" : "";
        echo $m[$i][$j].$con ;
    }
}
for ($j=0;$j<6;$j++){
    for($i=0;$i<5;$i++){
            if($j%2===1){
                $max<$m[$i][$j]? $max=$m[$i][$j]:$max;
                $check=true;
            }
            else{
                $check=false;
            }
        }
        $check ? print_r("<br>" .$max. "<br>") : $check;
        $max !=0 ? $pr*=$max:$pr;
        $max=0;
    }echo "Произведение =  ".$pr;
