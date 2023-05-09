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