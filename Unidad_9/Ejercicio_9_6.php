<html>
   
    <body>

    <form action="Ejercicio_9_6.php" method = "get">
          Introduzca su nombre:
          <br>
          <input type="text" name="nombre">
          <br>
          Introduzca su sueldo:
          <br>
          <input type="text" name="sueldo">
          <br>
          <input type="submit" value="enviar">

        <?php
            $servidor = "127.0.0.1";
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";

            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            $consulta = "SELECT max(dni) FROM empleados";
          
            $result = mysqli_query($conn, $consulta);

            $lastDNI = mysqli_fetch_array($result);
            
            echo $lastDNI[0];

            $ultDNI = intval($lastDNI[0]);

            $ultDNI++;

            

            $insert = "INSERT INTO empleados (dni,nombre,sueldo,plus) VALUES ('$ultDNI','$_GET[nombre]','$_GET[sueldo]', '1000')";
            $result2 = mysqli_query($conn, $insert);
            if ($result2==TRUE)
                echo "Se ha insertado correctamente el dato<br>";
            else
            {
                echo mysqli_error($conn);
                die ("Hubo un error");
            } 
               
            
 
            mysqli_close($conn);
                                     
        ?>
        
    </body>
    
</html>