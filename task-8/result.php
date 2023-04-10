<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    print_r($_GET);
    ?>
    <br>
        <?php
    print_r($_POST);
    ?>
    <br>
        <?php
    print_r($_REQUEST);
    ?><?php
    echo $_GET['fi'] ;
    echo $_POST ['login'];
    ?>
</body>

</html>