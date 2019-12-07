<html>
    <body>
    <?php
       
            # Si no hay una pulsación previa, muestra el formulario
           
            if ( !isset ( $_GET["boton"] ) )
            {
        ?>    
        <form action="Ejercicio_7_3_2.php" method = "get">
          
          Introduzca su nombre:
          <br>
          <input type="text" name="nombre">
          <br>
          <input type="radio" name="radio" value="patatas">
          <label for="patatas"> Patatas </label>
          <input type="radio" name="radio" value="tomates">
          <label for="tomates"> Tomates </input>
          <input type="radio" name="radio" value="zanahoria">
          <label for="zanahoria">Zanahoria</label>
          <br>
          <select name="ciudad">
              <option>Valencia</option>
              <option>Torrent</option>
              <option>Paiporta</option>
          </select>
          <input type="checkbox" value="manzana" name="frutas">
          <input type="checkbox" value="pera" name="frutas">
          <input type="checkbox" value="platano" name="frutas">
          <br>
          <input type="password" name="password">
          <br>
          <input type="submit" value="enviar">
         
      </form>
        <?php
        }
            echo "Encantado de conocerte, ";
             if (empty($_GET["nombre"])){
                 echo "No se ha introducido ningún nombre";
             }else{
                 echo $_GET["nombre"];
             }
            echo "<br>";
            
            echo "Encantado de conocerte, ";
            echo $_GET["radio"];
            echo "<br>";
            
            echo "Encantado de conocerte, ";
            echo $_GET["ciudad"];
            echo "<br>";
            
            echo "Encantado de conocerte, ";
            echo $_GET["frutas"];
            echo "<br>";
            
            echo "Encantado de conocerte, ";
            echo $_GET["password"];
            echo "<br>";
            
        ?>
    </body>
</html>