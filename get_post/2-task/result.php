<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Ваш логин : <?php echo ($_POST['login']) ?>
    <br>
    <?php $_POST['password'] = md5($_POST['password']) ?>
    Ваш пароль : <?php echo $_POST['password'] ?>

</body>
</html>