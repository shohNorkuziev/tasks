<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>
<body>
<form method="post">
  <h2>Draw Matrix</h2>
  <label for="columns">Количество столбцов:</label>
  <input type="number" name="columns" id="columns" required class="as"><br>
  <label for="rows">Количество строк:</label>
  <input type="number" name="rows" id="rows" required class="as"><br>
  <h2>Mark</h2>
  <label for="columns">Столбец:</label>
  <input type="number" name="column1" id="column1" required class="as"><br>
  <label for="rows">Строка:</label>
  <input type="number" name="row1" id="row1" required class="as"><br>
 
  <input type="submit" value="Создать матрицу">
</form>
</body>
</html>


<?php
if(isset($_POST['columns'])){
$columns = $_POST['columns'];
$rows = $_POST['rows'];
$column1 = $_POST['column1'];
$row1 = $_POST['row1'];

$matrix = array();
for ($i = 0; $i < $rows; $i++) {
  $matrix[$i] = array_fill(0, $columns, 1);
}

?>

<h2>Матрица:</h2>
<table>
  <?php
 
  for ($i=0;$i<$rows;$i++){
    echo "<tr>";
    for ($j=0;$j<$columns;$j++){
       if (($i !=$row1-1) || ($j!=$column1-1) )
          echo "<td>X</td>";
        else
          echo "<td class='green'>S</td>";
    }
    echo "</tr>";
  }}
  ?>
</table>