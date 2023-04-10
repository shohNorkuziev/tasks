<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            border: 1px solid;
        }
        td{
            border: 1px solid;
        }
    </style>
</head>
<body>
<?php
$dsn = "mysql:host=localhost;port=3307;dbname=task_db";
$user = "root";
$pass = "root";

$pdo = new PDO($dsn, $user, $pass);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO data_base (name, price, qty) VALUES (:name, :price, :qty)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':price', $price);
    $stmt->bindValue(':qty', $qty);
    $stmt->execute();
}

if(isset($_GET['action']) && isset($_GET['id'])) {
    $id = $_GET['id'];

    if($_GET['action'] == 'edit') {
        header("Location: edit.php?id=$id");
        exit();
    } elseif($_GET['action'] == 'delete') {
        $sql = "DELETE FROM data_base WHERE ID = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}

$sql = "SELECT * FROM data_base";
$result = $pdo->query($sql);

if ($result->rowCount() > 0) {
    echo "<table><tr><th>ID</th><th>Название</th><th>Цена</th><th>Количество</th><th>Изменить</th><th>Удалить</th></tr>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . " ₽" . "</td><td>" . $row["qty"] . "</td><td><a href='?action=edit&id=" . $row["ID"] . "'>Изменить</a></td><td><a href='?action=delete&id=" . $row["ID"] . "' onclick='return confirm(\"Вы уверены, что хотите удалить эту запись?\")'>Удалить</a></td></tr>";
    }
    echo "</table>";
}

?>

<form method="post">
    <label for="name">Название:</label>
    <input type="text" id="name" name="name" required>
<br/>
    <label for="price">Цена:</label>
    <input type="number" id="price" name="price" required>
    <br/>
        <label for="qty">Количество:</label>
        <input type="number" id="qty" name="qty" required>
        <br/>
        <input type="submit" value="Добавить">
    </form>
</body>
</html>