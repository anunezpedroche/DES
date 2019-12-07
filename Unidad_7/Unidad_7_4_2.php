<html>
    <body>
    <?php
       
            # Si no hay una pulsación previa, muestra el formulario
           
            if ( !isset ( $_GET["boton"] ) )
            {
        ?>    
        <form action="Unidad_7_4_2.php" method = "get">
          
            Introduzca su operación:
            <br>
            <input type="text" name="num1">
            <br>
            <input type="text" name="num2">
            <br>
            <select name="operador">
                <option>-</option>
                <option>+</option>
                <option>/</option>
                <option>*</option>
            </select>
            <br>
            <input type="submit" value="enviar">
            <br>
            Resultado:
            <br>
      </form>
        <?php
        }

            $numero1 = floatval($_GET["num1"]);
            $numero2 = floatval($_GET["num2"]);
            if($_GET["operador"]=="-"){
                echo ($numero1 - $numero2);
            }elseif($_GET["operador"]=="+"){
                echo ($numero1 + $numero2);
            }elseif($_GET["operador"]=="/"){
                echo ($numero1/$numero2);
            }elseif($_GET["operador"]=="*"){
                echo($numero1*$numero2);
            }
 
            
        ?>
    </body>
</html>