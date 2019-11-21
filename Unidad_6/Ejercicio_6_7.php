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
            $texto = "El perro de San Roque no tiene rabo porque Ramiro Ramírez se lo ha cortado";

            $letras = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y","z"];
            echo $texto;
            echo "<table border='2px'>";
            for($j=0;$j<count($letras);$j++){
                $cont = 0;
                echo "<tr>";
                for($i=0;$i<strlen($texto);$i++){                    
                    if($letras[$j] == $texto[$i]){
                        $cont++;
                    }                            
                }
                echo "<td>$letras[$j] aparece $cont veces</td>";
                echo "</tr>";                          
            } 
            echo "</table>";         

        ?>
</body>
</html>