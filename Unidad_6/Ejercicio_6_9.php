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
            $mail = "anunezpedroche@outlook.com";            
            
            $es = substr($mail,-3);
            $com = substr($mail,-4);

            if($es == ".es"){
                echo("El correo acaba en ".$es);
            }else if($com ==".com"){
                echo("El correo acaba en ".$com);

            }else{
                echo("Introduzca otro correo");
            }
        ?>
</body>
</html>