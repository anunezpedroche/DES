<html>
   
    <body>
        <?php
            $servidor = "127.0.0.1";
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";

            # Crear conexión
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            $consulta = "SELECT * FROM empleados";
          
            # A continuación se ejecuta la consulta y se devuelve el resultado
            # en el caso de que se trate de un SELECT. En otro caso devuelve
            # TRUE. Salvo si hay fallo, en cuyo caso devuelve FALSE.
            $result = mysqli_query($conn, $consulta);
           
            # Es preciso iterar para extrar una a una las filas del resultado
            echo "<table><tr><th>DNI</th><th>Nombre</th></tr>";
            while ($fila = mysqli_fetch_array($result)) {
             
                //echo $fila[0] . ': ' . $fila[1];
                //echo '<br>';
                 # Esta es una manera alternativa de mostrar la fila, habida
                 # cuenta de que mysqli_fetch_array devuelve un array
                 # asociativo
                //echo "<tr><td>".$fila["DNI"] ."</td>" ."<td>". $fila["nombre"]."</td></tr>"; //o bien echo $fila[DNI].':'.$fila[nombre];

                $insert = "UPDATE empleados SET plus = 10000 WHERE DNI =".$fila["DNI"].";";
                $result2 = mysqli_query($conn, $insert);
                # Como no se trata de un SELECT, mysqli_query devuelve TRUE
                # si se ha hecho correctamente y FALSE si ha habido error.
                if ($result2==TRUE)
                    echo "Se ha insertado correctamente el dato<br>";
                else
                {
                    # La siguiente función muestra el último error, en caso
                    # de haberlo.
                    echo mysqli_error($conn);
                    die ("Hubo un error");
                } 
               
            }
 
            mysqli_close($conn);
                                     
        ?>
        
    </body>
    
</html>