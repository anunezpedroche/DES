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
    $cadena = "Hola, mundo!";
    for($i = strlen($cadena); $i>=0; $i--){
        echo $cadena[$i];
    }
    ?>
</body>
</html>