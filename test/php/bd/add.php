<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  body {
    background-color: #2b2d3f;
    color: #fff;
    font-family: Arial, sans-serif;
  }

  form {
    display: grid;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
  }

  input[type="text"] {
    background-color: #252836;
    border: none;
    color: #fff;
    padding: 10px;
    width: 100%;
    margin-bottom: 20px;
    border-radius: 5px;
  }

  button {
    background-color: #c83821;
    border: none;
    color: #fff;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
  }

  button:hover {
    background-color: #ff3434;
  }
</style>
</head>
<body>
<form action="index.php" method="post">
    Имя<br><input type="text" name="name"><br>
    Фамилия<br><input type="text" name="surname"><br>
        <button>Добавить</button>
    </form>
</body>
</html>