<html>
    <body>
        <?php
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