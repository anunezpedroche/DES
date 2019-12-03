<html>
<meta charset="utf-8"/>
  <head>
    <style>
        tr{
            border: 1px solid black;
            background-color: black;
            color: white;
        }
    </style>
  </head>
    <body>
        <?php
            $servidor = "127.0.0.1"; # Puede ser una IP o un nombre DNS
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";

            # Crear conexión. Opcionalmente se puede poner como quinto parámetro
            # el puerto
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            # Comprobar conexión
            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito <br><br>";
           
            # A continuación se usa un "SELECT", pero igualmente podría ser
            #  INSERT, DELETE o UPDATE. El código PHP sería idéntico.
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
                echo "<tr><td>".$fila["DNI"] ."</td>" ."<td>". $fila["nombre"]."</td></tr>"; //o bien echo $fila[DNI].':'.$fila[nombre];

                //echo '<br>';
               // echo '<br>';
               
            }
            echo "</table>";
           
            # En el caso de haber usado un SELECT:
            echo "El resultado es de " . mysqli_num_rows($result) . " filas<br>";
           
            # Y para cualquier otro caso (INSERT, DELETE, UPDATE, SELECT),
            # el número de filas de la última operación se obtiene así:
            echo "El resultado es de " . mysqli_affected_rows($conn) . " filas<br>";
           
            mysqli_free_result($result);
           
           
            # Cerrar la conexión es una buena práctica, para liberar recursos
            # inmediatamente, pero si no se pone, no pasa nada porque PHP
            # cierra la conexión automáticamente al salir:
           
            mysqli_close($conn);
                                    
        ?>
       
    </body>
   
</html>
