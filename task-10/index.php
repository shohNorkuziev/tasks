<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
     <fieldset>
        <form action="result.php">
            <p> <input type="text" name="name" placeholder="введите имя"></p>
            <p><textarea type="text" name="messages" placeholder="Введите сообщение"></textarea></p>
            <fieldset>
                <p>вы любите кушать шаурму?</p>
                <input type="hidden" value="i don't know" name="yepOrNo">
                <p><input type="checkbox" name="yepOrNo" value="yep"> да</p>
                <p><input type="checkbox" name="yepOrNo" value="nope"> нет</p>
            </fieldset>
            <fieldset>
                <p>любимый язык программирования</p>
                <input type="hidden" name="language" value="я тоже пока не определился">
                <p><input name="language" type="radio" value="JS">JS</p>
                <p><input name="language" type="radio" value="PHP">PHP</p>
                <p><input name="language" type="radio" value="JAVA">JAVA</p>
            </fieldset>
            <input type="submit">
        </form>
    </fieldset>
    <fieldset>
        <form action="result.php" method="POST">
            <input name="login" type="login" placeholder="enter login">
            <input name="password" type="password" placeholder="enter password">
            <input type="submit">
        </form>
    </fieldset> 

    <!-- <form action="./result.php" method="POST">
        <select name="login" id="">
            <option value="Админ">Админ</option>
            <option value="Тимлид">Тимлид</option>
            <option value="бэкенд">бэкенд</option>
            <option value="фронтенд">фронтенд</option>
        </select>
        <input type="text" name="password">
        <input type="submit">
    </form> -->



</body>

</html>