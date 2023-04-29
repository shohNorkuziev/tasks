<?php
session_start();
$db=mysqli_connect('localhost','root','root','admin','3307');
if(!$db){
    die('Ошибка подключения');
}

function login($login,$password){
    global $db;
    $result=mysqli_query($db,"SELECT * FROM `users` WHERE login='$login' and password=md5('$password')");
    return mysqli_num_rows($result);
}
function getOrders(){
    global $db;
    $result=mysqli_query($db,"SELECT * `orders` ORDER BY date DESC");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}