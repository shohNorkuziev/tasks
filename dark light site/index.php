<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="light.css">
    <title>Document</title>
</head>

<body>
    <?php
    $h = date("H");
    echo $h;
    if ($h >= 8 and $h < 20)
        echo "<link rel=\"stylesheet\" href=\"light.css\"type=\"text/css\">";
    elseif ($h >= 20)
        echo "<link rel=\"stylesheet\" href=\"dark.css\"type=\"text/css\">";
    ?>
    <header>
        <div class="header_item">
            <ul class="select">
                <li>Личный кабинет</li>
                <li>Поиск</li>
                <li>Корзина</li>
                <li>Акции</li>
            </ul>
        </div>
    </header>
    <main>

    </main>
    <footer>
    </footer>
</body>

</html>