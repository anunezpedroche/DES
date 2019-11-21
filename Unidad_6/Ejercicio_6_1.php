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

    $year = 2012;
    if(strlen($year)!=4){
        echo "introduzca 4 cifras";
    }else{
        echo ((($year%4)==0)&&(($year%100)!=0) || ($year%400)==0) ? "$year es bisiesto" : "$year no es bisiesto";
    }

    ?>
</body>
</html>