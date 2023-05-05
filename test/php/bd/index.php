<?php
$link = mysqli_connect('localhost', 'root', '', 'test');
$result = mysqli_query($link, "SELECT * FROM users");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sqli = mysqli_query($link, "DELETE FROM users WHERE id=$id");
  header('Location:' . $_SERVER['PHP_SELF']);
  exit;
}
if(isset($_POST['name'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $sqli = mysqli_query($link,"INSERT INTO users (name, surname) VALUES ('$name', '$surname')");
  header('Location:' . $_SERVER['PHP_SELF']);
  exit;
}
if(isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $result = mysqli_query($link, "SELECT * FROM users WHERE id=$id");
  $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: grid;
      place-items: center;
      min-height: 100vh;
      background-color: #2b2d3f;
      color: #fff;
    }

    table {
      width: 100%;
      max-width: 800px;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border: 1px solid #fff;
    }

    th {
      background-color: #252836;
    }

    tr:nth-child(even){
      background-color: #1f2132;
    }

    button {
      background-color: #c83821;
      border: none;
      color: #fff;
      padding: 10px;
      cursor: pointer;
    }

    button:hover {
      background-color: #ff3434;
    }

    form {
      display: inline-block;
    }
  </style>
</head>
<body>
  <h1>Пользователи</h1>
  <form action="add.php">
    <button>Добавить пользователя</button>
  </form>
  <table>
    <tr>
      <th>id</th>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Действия</th>
    </tr>
    <?php foreach($rows as $row) { ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['surname'] ?></td>
        <td>
          <form action="edit.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <button type="submit">Изменить</button>
          </form>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>?delete=<?php echo $row['id']?>" method="POST">
            <button type="submit">Удалить</button>
          </form>
        </td>
      </tr>
    <?php } ?> 
  </table>
</body>
</html>