<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php insert info db</title>
</head>
<body>
    <?php
    $servername ="localhost";
    $port = "3307";
    $dbname = "task_db";
    $username = "root";
    $password = "root";

    $connect = mysqli_connect($servername,$port,$dbname,$username,$password)
    ?>
</body>
</html>