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
    $cadena = "Desarrollo de Aplicaciones web";

    for($i = 0; $i < strlen($cadena);$i++){
        if($cadena[$i]=='a'){
            $cadena[$i]= 'e';
        }
        else if($cadena[$i]=='e'){
            $cadena[$i]= 'i';
        }
        else if($cadena[$i]=='i'){
            $cadena[$i]= 'o';
        }
        else if($cadena[$i]=='o'){
            $cadena[$i]= 'u';
        }
        else if($cadena[$i]=='u'){
            $cadena[$i]= 'a';
        }
        
        
        
    }
    echo $cadena;

    for($i = 0; $i < strlen($cadena);$i++){
        if($cadena[$i]=='e'){
            $cadena[$i]= 'a';
        }
        else if($cadena[$i]=='i'){
            $cadena[$i]= 'e';
        }
        else if($cadena[$i]=='o'){
            $cadena[$i]= 'i';
        }
        else if($cadena[$i]=='u'){
            $cadena[$i]= 'o';
        }
        else if($cadena[$i]=='a'){
            $cadena[$i]= 'o';
        }
        
    }
    echo ('<br>');
    echo $cadena;

    
    ?>
</body>
</html>