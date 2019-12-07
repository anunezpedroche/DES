<html>
   
    <body>
        <?php
            $servidor = "127.0.0.1";
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";

            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            $consulta = "SELECT * FROM empleados";
          
            $result = mysqli_query($conn, $consulta);
           
            echo "<table><tr><th>DNI</th><th>Nombre</th></tr>";
            while ($fila = mysqli_fetch_array($result)) {
                $sueldo = $fila['sueldo']*1.1;
                $insert = "UPDATE empleados SET sueldo = '$sueldo' WHERE DNI =".$fila["DNI"].";";
                $result2 = mysqli_query($conn, $insert);
                if ($result2==TRUE)
                    echo "Se ha insertado correctamente el dato<br>";
                else
                {
                    echo mysqli_error($conn);
                    die ("Hubo un error");
                } 
               
            }
 
            mysqli_close($conn);
                                     
        ?>
        
    </body>
    
</html>