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
        $Alumno = array("nombre" => "adrian", "apellido" => "nuñez", "apellido2" => "pedroche");

        foreach($Alumno as $adrian){
            echo ucfirst($adrian)."<br>";
        }

    ?>
</body>
</html>