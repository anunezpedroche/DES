<html>
    <head>
        <style>
        @import "estilo.css";
        </style>
    </head>
    <body>
       
        <h1>
            <?php

            $horaActual = date ("g:i:s a d.m.y");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
        
            echo "<br>La hora actual es $horaActual";
           
            ?>   
           
        </h1>
    </body>
</html>
