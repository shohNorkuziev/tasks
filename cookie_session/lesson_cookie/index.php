<?php
setcookie('name', 'ivan', time()+3600*24*7);
setcookie('age', '18', time()+60);
print_r($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello wold!!</h1>
    <form action="./about.php">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>
<?php
setcookie('name', $_GET['name'] ,time()+60);
?>
 