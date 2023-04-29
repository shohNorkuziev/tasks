<?php
$count=count($_FILES['myfile']['name']);
var_dump($count);

for($i=0;$i<$count;$i++){
    if(!empty($_FILES['myfile']['tmp_name'][$i])){
        $current_path=$_FILES['myfile']['tmp_name'][$i];
        $filename=$_FILES['myfile']['name'][$i];
        $new_path=__DIR__.'/upload/'.$filename;
        if(move_uploaded_file($current_path,$new_path)){
            echo "<h2>Файл аватара успешно загружен на сервер</h2>";
            echo "<img src='upload/".$filename."' width='250px'>";
        }else{
            echo"<h3>Что-то пошло не так...</h3>";
        }
    }
    
}
