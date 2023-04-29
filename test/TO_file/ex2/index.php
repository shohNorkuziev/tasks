<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1></h1>
        <form action="./result.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="150000">
            Выбор файла<input type="file" name="myfile"><br>
            <input type="submit" name="load" value="Загрузить файл">
        </form>
    </body>
</html>