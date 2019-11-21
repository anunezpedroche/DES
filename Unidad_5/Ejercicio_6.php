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
        $j = 1;
        $color = 161616;
        $final = 00;
        echo ("<table><tr><th>Tabla del 1</th><th>Tabla del 2</th><th>Tabla del 3</th><th>Tabla del 4</th><th>Tabla del 5</th><th>Tabla del 6</th><th>Tabla del 7</th><th>Tabla del 8</th><th>Tabla del 9</th><th>Tabla del 10</th></tr>");
        $i=1;
        for($j=1;$j<=10;$j++){
            echo("<tr>");
            $mult = $j;

            $num = 1;
            echo("<td style='background-color:#aa0000;'> 1 * $mult = ".($i*1)." </td>");
            echo("<td style='background-color:#00aa00;'> 2 * $mult = ".($i*2)." </td>");
            echo("<td style='background-color:#0000aa;'> 3 * $mult = ".($i*3)." </td>");
            echo("<td style='background-color:#aa00aa;'> 4 * $mult = ".($i*4)." </td>");
            echo("<td style='background-color:#aaaa00;'> 5 * $mult = ".($i*5)." </td>");
            echo("<td style='background-color:#00aaaa;'> 6 * $mult = ".($i*6)." </td>");
            echo("<td style='background-color:#ff84dc;'> 7 * $mult = ".($i*7)." </td>");
            echo("<td style='background-color:#a0a0a0;'> 8 * $mult = ".($i*8)." </td>");
            echo("<td style='background-color:#a0550a;'> 9 * $mult = ".($i*9)." </td>");
            echo("<td style='background-color:#0aaaa0;'> 10 * $mult = ".($i*10)." </td>");
            echo("</tr>");
            $color++;
            $i++;
        }
        
        echo("</table>");
      
        ?>   
    
</body>
</html>