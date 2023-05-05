<?php 
include_once 'Figure.php'; 
include_once 'Square.php'; 
include_once 'Circle.php'; 

if(isset($_POST['check'])){ 
    $val = $_POST['sum'];
    if($_POST['sel'] == 'круг'){
        $circle = new Circle($val); 
        $square = $circle->finding_square(); 
        $perimetr = $circle->finding_perimetr(); 
    } 
    elseif($_POST['sel'] == 'квадрат'){ 
        $squareObject = new Square($val); 
        $square = $squareObject->finding_square(); 
        $perimetr = $squareObject->finding_perimetr(); 
    }  
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
        label, input, select {
  display: block;
  margin: 10px 0;
}

input[type="number"] {
  width: 650px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
}

select {
  width: 650px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.result {
  margin-top: 20px;
}

.result label {
  display: inline-block;
  width: 650px;
  font-size: 18px;
  margin-right: 20px;
}

.result input[type="number"] {
  width: 650px;
  font-size: 18px;
}
 input[type="text"]{width: 650px;height:40px;
  font-size: 18px;}
.form-container {
  max-width: 700px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.form-container h1 {
  text-align: center;
  font-size: 32px;
  margin-bottom: 30px;
}

.form-container fieldset {
  border: none;
  padding: 10px;
}

.form-container legend {
  font-size: 24px;
  margin-bottom: 10px;
  font-weight: bold;
}

.form-container label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
}

.error {
  color: red;
  margin: 5px 0;
}
    </style>
</head>
<body>
    
    <form action="" method="post" class="form-container">
        <fieldset><legend> <select name="sel" id="">
            <option value="круг">круг</option>
            <option value="квадрат">квадрат</option>
        </select ><br>
        Дл/Рад: <input type="number" name="sum"><br>
        <input type="submit" value="Вычислить" name="check"><br>
        Фигура: <input type="text" value="<?php echo isset($_POST['sel']) ? $_POST['sel'] : ''; ?>"><br>
        Дл/Рад: <input type="number" value="<?php echo isset($val)?$val : '0'; ?>"><br>
        Площадь:  <input type="number" value="<?php echo isset($square)?$square : '0'; ?>"><br>
        Периметр:  <input type="number" value="<?php echo isset($perimetr)?$perimetr : '0'; ?>"><br>

    </form>
</body>
</html>