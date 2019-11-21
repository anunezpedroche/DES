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
            $texto = "Desarrollo de Aplicaciones Web";
            $letras = "";
            $cambio = "";

            for($i=0;$i<strlen($texto);$i+=2){
                $letras = substr($texto,$i);
                $cambio = $letras[1];
                $cambio .= $letras[0];
                echo($cambio);
            }
            
        ?>
</body>
</html>