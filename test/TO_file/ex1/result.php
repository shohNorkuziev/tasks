<?php
if(isset($_FILES['myfile'])){
    echo "<h1>На сервер принят файл:</h1>";
    printf("
    <i>Имя файла </i><b>%s</b><p>
    <i>Размер файла </i><b>%s</b><p>
    <i>Тип файла </i><b>%s</b><p>
    <i>Имя файла </i><b>%s</b><p>
    <i>Код ошибки </i><b>%s</b>
    ",
    $_FILES['myfile']['name'],
    $_FILES['myfile']['size'],
    $_FILES['myfile']['type'],
    $_FILES['myfile']['tmp_name'],
    $_FILES['myfile']['error'],
    );
}
else{
    echo'<h3>З</h3>';
}
?>