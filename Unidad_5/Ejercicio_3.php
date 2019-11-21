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
            $i = 0;
            echo ("<table><tr><th>Par</th><th>Impar</th></tr>");
            
            do{
                ;
                if($i%2==0){
                    echo("<tr><td>$i</td><td></td></tr>");
                }else{
                    echo("<tr><td></td><td>$i</td></tr>");                    
                }
            
                $i++;
                
            }while ($i <= 1000);
            echo("</table>");
     ?>     
</body>
</html>