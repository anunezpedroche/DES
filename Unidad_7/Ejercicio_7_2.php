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
        $Alumno = array("Nombre" => "Adrián", "apellido" => "Núñez", "apellido2" => "Pedroche");

        $tam=count($Alumno);

        end($Alumno);
        echo current($Alumno)."<br>";
        for ($i=$tam;$i>0;$i--){
            echo prev($Alumno)."<br>";
        }

    ?>
</body>
</html>