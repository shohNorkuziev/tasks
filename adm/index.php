<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/logo.jpg">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>internet shop KINDER</title>
</head>
<body>
    <header>
        <img src="./assets/images/logo.jpg" alt="">
        <h1>
        internet shop KINDER
        </h1>
    </header>
    <nav>
        <a href="">Главное</a>
        <a href="./adminpanel/">Админстративная панель</a>
    </nav>
    <main>
        <form action="" method="post">

        <h2>SING IN</h2>
        <p class="error">
            <?php
            $login = $_POST['login']??'';
            $password = $_POST['password']??'';
            if ($login && $password){
                if(login($login, $password)){
                    header("Location: http://adm/adminpanel");
                    $_SESSION['user']=$login;
                }else{
                    echo "логин и пароль не верные";
                }
            }
            ?>
        </p>
            <label for="">логин
                <input type="text" name="login" >
            </label>
            <label for="">пароль
                <input type="password" name="password" >
            </label>
            <label for="">
                <button>sign in</button>
            </label>
        </form>
    </main>
    <script src="./assets/scripts/main.js"></script>
</body>
</html>