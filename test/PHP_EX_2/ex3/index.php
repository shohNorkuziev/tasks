<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
        }
        input[type="text"], input[type="radio"], input[type="submit"] {
            background-color: #444;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form action="result.php" method="post">
        <p>Имя:</p>
        <input type="text" name="name">
        <p>Мне есть 18 лет:</p>
        <input type="radio" name="r" value="1"><br>
        <input type="submit">
    </form>
</body>
</html>