<html>
  
    <body>
        <?php
          
           # Las cookies pueden ser fácilmente modificables desde un ordenador
           # porque son simples ficheros de texto. Además si se han almacenado
           # por ejemplo 10 cookies, de 4kb, el navegador debe subir 40kb cada
           # vez que visite el servidor, ralentizando la navegación.
           #
           # Una sesión almacena la información en el servidor en lugar de en
           # el navegador. El navegador sólo guarda una pequeña cadena de
           # identificación de sesión. Los datos asociados a la sesión se
           # guardan, en lugar de en una base da datos, en el array asociativo
           # superglobal $_SESSION.
           #
           # Como en el fondo el identificador de sesión se guarda en una
           # cookie, la orden de creación de sesión debe darse antes de enviar
           # cualquier otro contenido al navegador.
          
           # La siguiente función crea una cookie de sesión si no la hay,
           # y en caso de haberla, la lee y la usa:
           session_start();
          
            echo "<form action='Ejercicio_11_2.php' method='POST'>"; 
            echo "Introduzca un número";
            echo "<input type='text' name='contador'>";
            echo "<input type='submit' name='enviar' value='Enviar'>";
            echo "</form>";  

            if(!isset($_POST["enviar"])){
                $_SESSION['contador'] = "";
            }else{
                if($_POST['contador']!= ""){
                    $_SESSION["contador"] = $_SESSION["contador"]." # ".$_POST['contador'];
                    echo $_SESSION["contador"];
                }
            }
            //echo $_SESSION["contador"]."#";
        
                
           
           # En $_SESSION se pueden almacenar muchas variables, e incluso
           # arrays y objetos
        ?>
       
    </body>
   
</html>