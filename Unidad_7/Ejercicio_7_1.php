<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        $num = array(0,1,2,3,4,5,6,7,8,9);
        $tam = count($num);

        echo "Hacia adelante";
        echo "<br>";

        for($i=0;$i<=$tam;$i++){
        
                echo $num[$i].'<br>';
            
        }

        echo "Hacia atrás";
        echo "<br>";
        
        end($num);

        for($i=$tam;$i<=$tam;$i--){
   
            echo ($num)."<br>";
        }

    ?>
</body>
</html>