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
           
            echo 'La hora actual es $horaActual';
            echo "<br>La hora actual es $horaActual";
           
            ?>   
           
        </h1>
        <p> Podemos extraer la conclusión de que la diferencia entre usar comilla simple o doble, es que con la simple muestra el texto tal cual está puesto en el echo, y con las dobles es capaz de mostrar las variables y etiquetas de código que queramos añadir.
    </body>
</html>
