
<?php
require_once "../helpers/function.php";
if(empty($_SESSION["user"])){
    header("Location: http://BaseAdmin");
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Интернет-магазин kinder-shop</title>
        <link rel="icon" type="image/x-icon" href="../asses/image/logo.jpg">
        <link rel="stylesheet" href="../asses/style/style.css">
        <script defer src="../asses/scripts/script.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="logo">
                    <img src="../asses/image/logo.jpg" alt="" height="50">
                    <h1>Интернет-магазин kinder-shop</h1>
                </div>
                <nav>
                    <a href="">Главная</a>
                    <a href="../log.php">Выход</a>
                </nav>
            </header>
            <main>
                <h2></h2>
                <table>
                    <tr>
                        <th>
                            № Заказа
                        </th>
                        <th>
                            Дата и время офромления
                        </th>
                        <th>
                            Контакт пользователя
                        </th>
                        <th>
                            Содержание заказа
                        </th>
                        <th>
                            Общая стоимость
                        </th>
                        <th>
                            Действие
                        </th>
                    </tr>
                    <?php
                        foreach(getOrders() as $order){                       
                    ?>
                    <tr>
                        <th>
                            <?=$order['id'] ?>
                        </th>
                        <th>
                        <?=$order['date'] ?>
                        </th>
                        <th>
                        <?=$order['contact'] ?>
                        </th>
                        <th>
                        <?=$order['context'] ?>
                        </th>
                        <th>
                        <?=$order['price'] ?>
                        </th>
                        <th>
                            
                        </th>
                    </tr>
                    <?php                          
                        }
                    ?>
                </table>
            </main>
            <footer>
1
            </footer>
        </div>
    </body>
</html>