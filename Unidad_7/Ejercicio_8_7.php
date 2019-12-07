<html>
    <body>
       
        <form action="Ejercicio_8_7.php" method = "get">
          
            Introduzca su nombre:
            <br>
            <input type="text" name="nombre">
            <br>
            <input type="submit" value="enviar">
            <?php
           
           if ( $_GET["nombre"] == true)
           {
               # Esta instrucción debe contener lo primero que se envíe al
               # navegador, y además se termina con exit, para que no se
               # envíe nada más.

            header ( "Location: Ejercicio_8_7_premio.php");
               exit;
           }
          
           else if(isset($_GET["nombre"]))
           {         exit;
           }   
          
          
       ?>
        </form>
    </body>
   
</html>