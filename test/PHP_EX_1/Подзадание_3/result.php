<?php
    print_r($_POST);
    if($_POST['login']=='Админ' and $_POST['password']=='Админ'){
        echo '<p>Получин доступ А</p>';
    }
    elseif($_POST['login']=='Преподаватель' and $_POST['password']=='Преподаватель'){
        echo '<p>Получин доступ Б</p>';
    }
    elseif($_POST['login']=='Студент' and $_POST['password']=='Студент'){
        echo '<p>Получин доступ В</p>';
    }
    else{
        echo '<p>Не верные данные </p>';
    }
?>