<?php
if (isset($_FILES['myfile'])){
    echo "<h2>На сервере принят файл:</h2>";

    printf(
        "<i>Имя файла :</i> <b> %s </b>, <p>
        <i>размер файла :</i> <b> %s </b>,байт <p>
        <i>тип содержимого файла :</i> <b> %s </b>,байт <p>
        <i>имя временного файла файла :</i> <b> %s </b>,байт <p>
        <i>код ошибки :</i> <b> %s </b>,байт
    ",
    $_FILES['myfile']['name'],
    $_FILES['myfile']['size'],
    $_FILES['myfile']['type'],
    $_FILES['myfile']['tmp_name'],
    $_FILES['myfile']['error']
    );
}else{
    echo "<h3>ЗАполните пожалуйста форму!</h3>";
}
