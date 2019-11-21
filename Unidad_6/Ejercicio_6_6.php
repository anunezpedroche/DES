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

$tamañoTexto = strlen($texto);

for($i=0;$i<$tamañoTexto;$i+=2){
    $letra = $texto[$i+1];
    $texto[$i+1] = $texto[$i];                
    $texto[$i] = $letra;

    if($texto[$i] == "a"){
        $texto[$i] = "e";
    }else if($texto[$i] == "e"){
        $texto[$i] = "i";
    }else if($texto[$i] == "i"){
        $texto[$i] = "o";
    }else if($texto[$i] == "o"){
        $texto[$i] = "u";
    }else if($texto[$i] == "u"){
        $texto[$i] = "a";
    }
}

echo($texto);

for($i=0;$i<$tamañoTexto;$i+=2){

    if($texto[$i] == "e"){
        $texto[$i] = "a";
    }else if($texto[$i] == "i"){
        $texto[$i] = "e";
    }else if($texto[$i] == "o"){
        $texto[$i] = "i";
    }else if($texto[$i] == "u"){
        $texto[$i] = "o";
    }else if($texto[$i] == "a"){
        $texto[$i] = "u";
    }

    $letra = $texto[$i+1];
    $texto[$i+1] = $texto[$i];                
    $texto[$i] = $letra;

    
}
echo("<br>");
echo(   $texto);

?>
</body>
</html>