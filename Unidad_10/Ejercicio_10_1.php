<html>
  
    <body>
        <?php
          
           # Una cookie permite guardar una pequeña cantidad de información
           # (hasta 4kb) en el navegador, como si fuera una variable.
           #
           # Se puede hacer que una cookie dure una cantidad determinada de
           # tiempo en el navegador, desde unos segundos a varios años,
           # o se puede indicar que expire al cerrar el navegador. La mayoría
           # de los navegadores permiten almacenar hasta 30 cookies por
           # sitio web.
           #
           # El servidor envía las cookies al navegador como parte de la
           # cabecera HTML. Las cookies contienen la siguiente información:
           #
           # name:      el nombre de la cookie.
           #
           # value :    valor de la cookie.
           #
           # expires:   el momento en que va a expirar borrándose del navegador.
           #            Es una cifra en segundos. Si vale 0, expira justo
           #            al cerrar el navegador.
           #
           # path:      la cookie sólo se devuelve a los programas de servidor
           #            que estén en la ruta especificada. Si se quiere
           #            que se envíe a todos, incicar "/".
           #
           # domain:    por defecto, el navegador devuelve la cookie al servidor
           #            que se la ha enviado. Sin embargo, con este campo
           #            podemos hacer que se envíe sólo al dominio
           #            especificado.
           #
           # secure:    si este campo está presente la cookie se envía sólo si
           #            hay una conexión segura (https). De no figurar el campo
           #            la cookie se envía siempre.
           #
           # HttpOnly:  si este campo está presente la cookie no será accesible
           #            mediante JavaScript
           #
          
           $name="micookie";
           $value=$_GET["nombre"]; # Podría ser una cadena de texto
           $expires=time()+60; # 60 segundos después del momento actual
           $path="/";
           $domain="";
           $secure=false;
           $HttpOnly=true;
          
           # Es preciso asegurarse de llamar a setcookie() antes de enviar
           # ninguna otra salida al navegador
           setcookie ($name,$value,$expires,$path,$domain,$secure,$HttpOnly);
          
           if (isset($_COOKIE["micookie"]))
           {
               echo "Hola ";
               echo $_COOKIE["micookie"];
           }  
           else{
               echo "<form action='Ejercicio_10_1.php' method='GET'>"; 
               echo "<input type='text' name='nombre'>";
               echo "<input type='submit' name='enviar' value='Enviar'>";
               echo "</form>";                
           }                    
        ?>
       
    </body>
   
</html>