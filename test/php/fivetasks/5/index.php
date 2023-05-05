<?php
$shours = isset($_POST['h']) ? $_POST['h'] : "0";
$sminutes = isset($_POST['m']) ? $_POST['m'] : "0";
$sseconds = isset($_POST['s']) ? $_POST['s'] : "0";
$kms = isset($_POST['kmv']) ? $_POST['kmv'] : "0";

if (isset($_POST['select'])) {
  if ($_POST['select'] == 'time') {
    $kmv = floatval($_POST['kmv']);
    $kms = floatval($_POST['kms']);
    $time_in_seconds = $kmv / $kms * 3600;
    $hours = floor($time_in_seconds / 3600);
    $time_in_seconds -= $hours * 3600;
    $minutes = floor($time_in_seconds / 60);
    $time_in_seconds -= $minutes * 60;
    $seconds = floor($time_in_seconds);
    $shours = strval($hours);
    $sminutes = strval($minutes);
    $sseconds = strval($seconds);
  } elseif ($_POST['select'] == 'distance') {
    $h = $_POST['h'];
    $m = $_POST['m'];
    $s = $_POST['s'];
    $m = $m / 60;
    $s = $s / 3600;
    $h = $h + $m + $s;
    $_POST['kmv'] = $_POST['kms'] * $h;
  } elseif ($_POST['select'] == 'speed') {
    $h = $_POST['h'];
    $m = $_POST['m'];
    $s = $_POST['s'];
    $m = $m / 60;
    $s = $s / 3600;
    $h = $h + $m + $s;
    $_POST['kms'] = $_POST['kmv'] / $h;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <div>
      <input type="radio" name="select" value="time" <?= isset($_POST['time']) ? 'checked' : '' ?>>Время(t)
      <label>часы</label>
      <label>минуты</label>
      <label>секунды</label>
    </div>
    <input type="number" name="h" value="<?= $shours ?>" class="ass1">
    <input type="number" name="m" value="<?= $sminutes ?>" class="ass2">
    <input type="number" name="s" value="<?= $sseconds ?>" class="ass3">


    <div>
      <input type="radio" name="select" value="distance" <?= isset($_POST['distance']) ? 'checked' : '' ?>> Расстояние(s)
      <input type="number" name="kmv" value="<?= isset($_POST['kmv']) ? $_POST['kmv'] : '' ?>" class="ass4">
      <select name="" id="">
        <option value="">километр</option>
      </select>
    </div>

    <div>
      <input type="radio" name="select" value="speed" <?= isset($_POST['speed']) ? 'checked' : '' ?>> Скорость(v)
      <input type="number" name="kms" value="<?= isset($_POST['kms']) ? $_POST['kms'] : '' ?>" class="ass5">
      <select name="" id="">
        <option value="">километра в час(км/ч)</option>
      </select>
    </div>
    <button>Посчитать</button>
  </form>
</body>

</html>