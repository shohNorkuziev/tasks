<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>load file</h1>
    <h2>moving load file</h2>
    <?php
    $file = $_FILES["myfile"];

    $count = count($file['name']);

    for($i=0; $i< $count ; $i++){
        $current_path = $file['tmp_name'][$i];

        $filename = time() . "-" . $_FILES['myfile']['name'];
        $new_filename = pathinfo($filename, PATHINFO_FILENAME) . ".jpg";

        $new_path = __DIR__ .'/upload/' . $new_filename;

        move_uploaded_file($current_path, $new_path);
    }
    
    
    $new_path = __DIR__ . '/upload/' . $new_filename;
    if (move_uploaded_file($current_path, $new_path)){
        echo "<h2>file avatar successfuly uploaded to the server</h2>";
        echo "<img src='/upload/" . $new_filename . "' width='250px'>";
    }else{
        echo "<h3> error men look the code</h3>";
    }
    ?>
</body>
</html>