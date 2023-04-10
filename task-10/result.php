<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



Здравствуйте, <?php echo htmlspecialchars($_GET["name"]); ?>.
    <br>
    Ваше сообщение: <?php echo htmlspecialchars($_GET['messages']); ?>.
    <br>
    Ваш выбор: <?php echo htmlspecialchars($_GET['yepOrNo']); ?>.
    <br>
    Ваш любимый язык программирования: <?php echo htmlspecialchars($_GET['language']); ?>.


            Ваш логин : <?php echo  htmlspecialchars($_POST['login'])?>
            <br>
          <?php $_POST['password']=md5($_POST['password'])?> 
            Ваш пароль : <?php   echo $_POST['password']?> 
    

    
</body>

</html>