<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        $hostname='localhost';
        $username='root';
        $password='root';
        $dbname='base_ex';
        $port='3307';
        $conn = mysqli_connect($hostname,$username,$password,$dbname,$port);                
        mysqli_set_charset($conn,'utf8');
        $arr=mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM users"),MYSQLI_ASSOC);
        ?>
        <h2>Добавление записей в BD</h2>
        <form action="" method="$_POST">
            <input type="hidden" name="check" value="1">
            <input type="text" name="f_name1">
            <input type="text" name="l_name1">
            <input type="submit" value="Добавить запись">
        </form>
        <h2>Записи</h2>
        <?php
        if(isset($_POST['check'])){
            $sql='INSERT INTO users SET first_name="'.$_POST['f_name1'].'",last_name"'.$_POST['l_name1'].'"';
            $result = mysqli_query($conn, $sql);
            if ($result == false) {
                print("Произошла ошибка при выполнении запроса");
            }
            $_POST['check']=null;
        }
        foreach($arr as $k){
            echo '<div class="div"><form action="" method="post">';
            foreach($k as $k2=>$v){
                if($k2=='id'){
                    echo '<input type="hidden" name="id" value="'.$v.'">';
                }
                if($k2=='first_name'){
                    echo $v.'<br>';
                }
                if($k2=='last_name'){
                    echo $v.'<br>';
                }
            }
            echo'<input type="submit" value="Изменить запись"></form></div>';
        }  
        if(isset($_POST['id'])){
        ?> 
        <div class="window">
            <h2>Введите новые значения</h2>
            <form action="" method="$_POST">
                <input type="hidden" name="check1" value="1">
                <p>first name:<br><input type="text" name="f_name2"></p>
                <p>last name:<br><input type="text" name="l_name2"></p>
                <input type="submit" value="Изменить запись">
            </form>
        </div>
        <?php
        }; 
        if(isset($_POST['check1'])){
            
        } 
        ?>  
               
        
        
    </body>
</html>