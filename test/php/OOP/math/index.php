<?php
require_once 'Math.php';

if (isset($_POST['check'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  $operation = $_POST['operation'];

  if (is_numeric($a) && is_numeric($b)) {
    switch ($operation) {
      case 'add':
        $result = Math::add($a, $b);
        break;
      case 'sub':
        $result = Math::sub($a, $b);
        break;
      case 'mul':
        $result = Math::mul($a, $b);
        break;
      case 'div':
        $result = Math::div($a, $b);
        if ($result === false) {
          $error = 'Деление на ноль';
        }
        break;
      default:
        $error = 'Неизвестная операция';
        break;
    }
  } else {
    $error = 'Введите числовые значения';
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Калькулятор</title>
  <style>
    body {
      background-color: #222;
      color: #fff;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    form {
      display: inline-block;
      margin-top: 50px;
    }
    input[type="text"], select {
      padding: 10px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      margin-right: 10px;
      background-color: #444;
      color: #fff;
    }
    input[type="submit"] {
      padding: 10px 20px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      background-color: #f00;
      color: #fff;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #c00;
    }
    p {
      font-size: 24px;
      margin-top: 50px;
    }
    .error {
      color: #f00;
    }
  </style>
</head>
<body>
  <form method="post">
    <input type="text" name="a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>" required>
    <select name="operation">
      <option value="add">+</option>
      <option value="sub">-</option>
      <option value="mul">*</option>
      <option value="div">/</option>
    </select>
    <input type="text" name="b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>" required>
    <input type="submit" name="check" value="Вычислить">
  </form>
  <?php if (isset($result)): ?>
    <p>Результат: <?php echo $result; ?></p>
  <?php endif; ?>
  <?php if (isset($error)): ?>
    <p class="error">Ошибка: <?php echo $error; ?></p>
  <?php endif; ?>
</body>
</html>