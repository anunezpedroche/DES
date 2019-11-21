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
        $texto = "el otro día me compré el libro de el escritor búlgaro tan famoso, el que vive en Asturias";
        $buscar = "el";
        $cambiar = "the";

        $pos = strpos($texto,$buscar);

        if($pos == $buscar){
            $r = str_replace($buscar,$cambiar,$texto);
            echo($r);
        }else{
            echo ("No hay coincidencias con 'el' en el texto");
        }

    ?>
</body>
</html>