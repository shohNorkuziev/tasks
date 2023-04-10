<?php
function randarr( $N, $min = 0, $max = 50) {
    return array_map(
        function() use( $min, $max) {
            return rand( $min, $max);
        },
        array_pad( [], $N, 0)
    );
}
print_r( randarr(6));
?>
<br>
<?php
function kolich(){
    $line = 'HTML CSS PHP';
   $line_1 = str_word_count($line);
    return $line_1;
}
echo kolich();
?>
<br>
<?php
function obr(){
    $line = 'HTML CSS PHP';
   $line_1 = strrev($line);
    return $line_1;
}
echo obr();
?>
<br>
<?php
function line_length(){
    $line = 'HTML CSS PHP JAVASCRIPT';
   $line_1 = strlen ($line);
    return $line_1;
}
echo line_length();
?>
<br>
<?php
function line(){
    $line = 'HTML CSS PHP JAVASCRIPT';
   $line_1 = str_split ($line, 1);
    return $line_1;
}
echo line();
?>



