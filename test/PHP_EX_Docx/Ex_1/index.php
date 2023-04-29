<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <style>
            p{
                display: inline;
            }
        </style>
        <?php
        if(empty($_POST)){

        
        ?>
        <form action="" method="post">
            <h1 >Draw matrix</h1>
            <P for="col_draw">Columns</P>
            <input type="number" min="1" name="col_draw" required>
            <P for="row_draw">Rows</P>
            <input type="number" min="1"  name="row_draw" required>
            <h1>Mark</h1>
            <P for="col_mark">Columns</P>
            <input type="number" min="1" name="col_mark" required>
            <P for="row_mark">Rows</P>
            <input type="number" min="1"  name="row_mark" required><br>
            <input type="submit">
        </form>
        <?php
        }else{
            $ar=[];
       for($i=0;$i++<$_POST['row_draw'];){
           $ar[$i]=[];
           for ($j=0;$j++<$_POST['col_draw'];){
            if($i==$_POST['row_mark'] and $j==$_POST['col_mark']){
                $ar[$i][$j]="S";
            }
            else{
                $ar[$i][$j]="X";
            }
            }
        }
        ?>
            <h1>Matrix</h1>

        <?php   
        foreach($ar as $k){
            foreach($k as $k2){
                if($k2=="S"){
                    echo "<p style='color:green'>".$k2." </p>";
                }
                else{
                    echo"<p>".$k2." <p>";
                }
            }
            echo "<br>";
        }
        }
        ?>
    </body>
</html>