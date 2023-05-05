
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
</head> 
<body> 
<form action="" method="post"> 
    a: <input type="number" name="a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>" required>

    b: <input type="number" name="b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>" required>


    <select name="sel"> 
        <option value="сложение">сложение</option> 
        <option value="вычитание">вычитание</option> 
        <option value="деление">деление</option> 
        <option value="умножение">умножение</option> 
    </select>


    <input type="submit" value="Вычислить" name="check">


    Равно: <?php if(isset($_SESSION['result'])){echo 'value="'.$_SESSION['result'].'"'; unset($_SESSION['result']);}?> 
</form>
 
</body> 
</html> 
<?php
session_start();
include_once 'Math.php';

if(isset($_POST['check'])) { 
    if(!empty($_POST['a']) && !empty($_POST['b'])) {
        $a = intval($_POST['a']);     
        $b = intval($_POST['b']); 
        $ab = new Math($a, $b); 

        if($_POST['sel'] == 'сложение'){ 
            $_SESSION['result'] = $ab->add();
        } 
        elseif($_POST['sel'] == 'вычитание'){  
            $_SESSION['result'] = $ab->sub();
        } 
        elseif($_POST['sel'] == 'деление'){  
            $_SESSION['result'] = $ab->div();
        } 
        elseif($_POST['sel'] == 'умножение'){  
            $_SESSION['result'] = $ab->mul();
        }
    } else {
        echo 'Заполните все поля';
    }
} else {
    echo 'Введите значения и нажмите "Вычислить"';
}
?>