<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Загрузка файлов</h1>
        <form action="result.php" method="post" enctype="multipart/form-data">
            <label for="">Выберите файл для загрузки
            <input type="file" name="myfile[]">
            <input type="file" name="myfile[]">
            <input type="file" name="myfile[]">
            </label>
            <input type="submit" name="loader" value="Загрузить файл">
        </form>
    </body>
</html>