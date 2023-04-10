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
        <h2>orders</h2>
        <table>
            <tr>
                <th>N заказа</th>
                <th>Дата и время и оформления</th>
                <th>контакты пользователя</th>
                <th>содержание заказа</th>
                <th>общая стоимость</th>
                <th>Действие</th>
            </tr>
            <tr>
                <?php
                foreach( getOrders() as $order){
                    ?>
                <th><?=$order['id'] ?></th>
                <th><?=$order['date'] ?></th>
                <th><?=$order['contact'] ?></th>
                <th><?=$order['context'] ?></th>
                <th><?=$order['price'] ?></th>
                <td>
                    
                </td>
            </tr>
            <?php }
            ?>
        </table>
    </main>
    <script src="./assets/scripts/main.js"></script>
</body>

</html>