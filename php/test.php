<?php
// установка соединения с базой данных
$dsn = 'mysql:host=localhost;port=3307;dbname=test';
$username = 'root';
$password = 'root';

try {
  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  exit;
}

// запрос данных из таблицы
$sql = "SELECT ID, name, surname FROM users";
$stmt = $conn->query($sql);
$data = $stmt->fetchAll();

// вывод данных в формате JSON
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
echo json_encode($data);
// закрытие соединения с базой данных
?>