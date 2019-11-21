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
    <h2>Ejercicio 3</h2>
    <?php
        $year=2100;
        echo ((($year%4)==0)&&(($year%100)!=0) || ($year%400)==0) ? "$year es bisiesto" : "$year no es bisiesto"
    ?>
</body>
</html>