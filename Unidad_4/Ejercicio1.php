<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Unidad 4</h1>
    <?php
        //Ejercicio 1
        $horaActual= date("H:i:s");
        echo("<h2>Ejercicio 1</h2>");
        //echo($horaActual);
        echo "<br>$horaActual";
        $h=5;
        if(date("H")>5&&date("H")<14){
            echo("<br> Buenos días");
        }else if(date("H")>15&&date("H")<22){
            echo("<br> Buenas tardes");
        }else if(date("H")>21&&date("H")<6){
            echo("<br> Buenas noches");
        }
    ?>
</body>
</html>