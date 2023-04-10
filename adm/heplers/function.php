<?php
session_start();
$db= mysqli_connect("localhost", "root", "root","site_adm","3307");
if (!$db){
    die("error");
}
function login($login, $password){
    global $db;
    $result = mysqli_query($db, "SELECT * FROM `users WHERE login='$login' AND password=md5($password)" );
    return mysqli_num_rows($result);
}

function getOrders()
{
    global $db;
    $result = mysqli_query($db,  "SELECT * FROM `orders` ORDER BY date DESC");
}