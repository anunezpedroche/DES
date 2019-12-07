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
          </form>
<br>
<br>
        <?php
            $servidor = "127.0.0.1";
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";

            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            $consulta = "SELECT * FROM empleados";
          
            $result = mysqli_query($conn, $consulta);
            
            while($fila = mysqli_fetch_array($result)){
                echo "<form action='Ejercicio_9_7.php' method='post'>";
                echo "<input type='text' name='nombre' value='".$fila['nombre']."'><input type='text' name='dni' value='".$fila['DNI']."'> ";
                echo "<input type='submit' name='borrar' value='borrar'></form>";

                if(isset($_POST['borrar'])){
                    $borrar = "DELETE FROM empleados WHERE dni=".$_POST['dni'].";";
                    $result2 = mysqli_query($conn,$borrar);
                    if($result2==true){
                        echo "Se borró el empleado";
                    }else{
                        echo "Algo fue mal";
                    }
                }

            }
            
 
            mysqli_close($conn);
                                     
        ?>
        
    </body>
    
</html>