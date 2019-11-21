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
    echo ("<table><tr><th>Par</th><th>Impar</th><th>Premoh</th></tr>");
    for($i=0;$i<10;$i++)
        {
            if($i%2==0){
                echo("<tr><td>$i</td><td></td><td></td></tr>");
            }else{
                if(($i%$i==0)&&($i%3!=0)&&($i%5!=0)&&($i%7!=0)&&($i!=1)||($i==3)||($i==5)||($i==7)){
                    echo("<tr><td></td><td>$i</td><td>Es primo</td></tr>"); 
                }else{

                    echo("<tr><td></td><td>$i</td><td></td></tr>");  
                }         
            }
               
        }
    
    echo("</table>");
    $num = 7;
    $cont=0;

    // Funcion que recorre todos los numero desde el 2 hasta el valor recibido


        ?>
</body>
</html>