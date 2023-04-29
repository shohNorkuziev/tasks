<?php
require_once "helpers/function.php";
if(!empty($_SESSION['user'])){
    
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Интернет-магазин kinder-shop</title>
        <link rel="icon" type="image/x-icon" href="asses/image/logo.jpg">
        <link rel="stylesheet" href="asses/style/style.css">
        <script defer src="asses/scripts/script.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="logo">
                    <img src="asses/image/logo.jpg" alt="" height="50">
                    <h1>Интернет-магазин kinder-shop</h1>
                </div>
                <nav>
                    
                </nav>
            </header>
            <main>
                <h2>Вход</h2>
                <p class="error">
                    <?php
                    $login=$_POST['login']??'';
                    $password=$_POST['password']??'';
                    if($login && $password){
                        if(login($login,$password)){
                            header("Location: http://BaseAdmin/adminpanel");
                            $_SESSION['user']=$login;
                        }else{
                            echo 'Логин и пароль не верные';
                        }
                    }
                    ?>
                </p>
                <form action="" method="post">
                    <label for="">
                        Логин<input type="text" name="login">
                    </label>
                    <label for="">
                        Пароль<input type="password" name="password">
                    </label>
                    <button>Войти</button>
                </form>
            </main>
            <footer>
1
            </footer>
        </div>
    </body>
</html>