<?php
    if($_POST['login']=='Фронтенд' & $_POST['password']=='Фронтенд'){
        echo '<p>Добро пожаловать Фронтенд</p>';
    }
    elseif($_POST['login']=='Тимлид' & $_POST['password']=='Тимлид'){
        echo '<p>Добро пожаловать Тимлид</p>';
    }
    elseif($_POST['login']=='Бэкенд' & $_POST['password']=='Бэкенд'){
        echo '<p>Получин доступ Бэкенд</p>';
    }
    else{
        echo '<p>Не верные данные </p>';
    }
?>