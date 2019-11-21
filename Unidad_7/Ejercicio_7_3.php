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
        $Alumno = array("Nombre" => "adrian", "apellido" => "nuñez", "apellido2"=>"pedroche");

        $tam=count($Alumno);

        for ($i=0;$i<$tam;$i++){
             $elemento=each($Alumno);
             echo ucfirst($elemento["value"])."<br>";            
        }


    ?>
</body>
</html>