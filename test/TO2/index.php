<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h1>Функция preg_split</h1>
    <?php
        $text=<<<HERE
            Когда и, и где, в какой пустыне,
            Безумец, их забутешь ты?
            Ах, ножки, ножки, ножки! где вы ныне?
            Где
            
HERE;
        $pattern="/\n/";
        $array=preg_split($pattern,$text);
        echo "<pre>";
        print_r($array);
    ?>
    <h1>Функция preg_grep</h1>
    <?php
        $array=array("PHP7 для начинающих","Программирование на ","Энциклопедия садовотства","Справочник команд php","для сложных задач","программирование PHP");
        $pattern2="/php/i";
        $array2=preg_grep($pattern2,$array);
        echo "<pre>";
        print_r($array2);
    ?>
    <h1>Функция preg_replace</h1>
    <?php
        $text="
        Когда и, и где, в какой пустыне,
        Безумец, их забутешь ты?
        Ах, ножки, ножки, ножки! где вы ныне?
        Где где где.
        ";
        echo "<h3>Исходный текст</h3>>";
        echo $text,"<p></p>";
        $text=preg_replace("/\n/","<br>",$text);
        echo "<h3>Форматированый текст</h3>>";
        echo $text;

    ?>
    <h1>Функция preg_replace рисунок</h1>
    <?php
        $list=<<<HERE
        {bull}PHP7 для начинающих<br>
        {bull}Программирование на<br>
        {bull}Энциклопедия садовотства<br>
        {bull}Справочник команд php<br>
        {bull}программирование PHP<br>
HERE;
    echo "<h3>Исходный текст</h3>>";
    echo $list,"<p></p>";
    $list=preg_replace("/{bull}/","<img src='bull.png' width='25px'>",$list);
    echo "<h3>Форматированый текст</h3>>";
    echo $list;
    ?>
    </body>
</html>