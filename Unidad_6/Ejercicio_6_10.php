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
            $mail = "anunezpedroche@gmail.com";           
            $arroba = "@";
            $pos = strpos($mail, $arroba);
            $str1 = "";
            $str2 = "";

            if($pos){
                $str1 = substr($mail,0,$pos);
                $str2 = substr($mail, $pos+1);
                echo($str1);
                echo("<br>");
                echo($str2);
            }else{
                echo ("El correo no tiene el formato adecuado");
            }
            
        ?>
</body>
</html>