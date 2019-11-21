<html>

    <body>

        

        <h1>

            <?php


           $AnimalFavorito = "gato";

           echo "Mi animal favorito es el $AnimalFavorito <br>";

           

           # La siguiente instrucción no es tan clara... ¿se imprimirá por

           # pantalla "gatos", o la variable inexistente $AnimalFavoritos?

           # 

           # echo "Mis animales favoritos son los $AnimalFavoritos <br>";

           # 

           # Para evitar el problema hay que usar llaves:

           

           echo "Mis animales favoritos son los {$AnimalFavorito}s <br>";

           

           # También se usan las llaves cuando se han de mostrar elementos

           # de arrays asociativos:

           

           $DatosPersonales["edad"] = 34;

           echo "Mi edad es {$DatosPersonales["edad"]} <br>";

           

           # Por supuesto, si no se quieren usar llaves se puede optar por la

           # concatenación:

           

           echo "Mi edad es " . $DatosPersonales["edad"]. "<br>";

           

          # Si la cadena contiene muchas comillas es tedioso tener que usar

          # secuencias de escape para representarlas. Es mejor tener un

          # delimitador distinto a las comillas, que el programador puede 

          # establecer a su gusto. Hay dos alternativas:

          #

          # NOTACiÓN HEREDOC

          # ----------------

          #

          # $cadena = <<<DELIMITADOR

          #  (introducir cadena aquí)

          # DELIMITADOR

          #

          # ¡ojo! en la línea del delimitador de cierre no debe haber nada,

          # ni siquiera tabuladores.

          # Con la notación "heredoc" el texto sigue las misnas reglas que

          # cuando se usan comillas dobles, esto es, los nombres de variables

          # son sustituidos

          

            $cadena = <<<MIAU

            Esto es una cadena con "comillas" y m&aacutes 'comillas', y mi

           animal favorito es el $AnimalFavorito<br>

MIAU;

          

          echo $cadena;

          

          # NOTACIÓN NOWDOC

          # ---------------

          #

          # El delimitador de apertura se encierra en comillas simples, y el

          # comportamiento es el mismo que tendría una cadena encerrada entre

          # comillas simples, esto es, no se sustituyen las variables por su

          # contenido:

          # 

          # $cadena = <<<'DELIMITADOR'

          #  (introducir cadena aquí)

          # DELIMITADOR

          

         $cadena = <<<'MIAU'

           Esto es una cadena con "comillas" y m&aacutes 'comillas', y mi

           animal favorito es el $AnimalFavorito<br>

MIAU;

           

           echo $cadena;         

           

           # Para crear una variable de cadena no es necesario asignarle una

           # cadena literal. También se le puede asignar el resultado de

           # cualquier expresión:

           

           $cadena2 = $cadena;

           

           echo $cadena2. "<br>";

           

           $x=150;

           $cadena3 = ( $x>100 ) ? "Grande" : "Peque&ntildeo";

          

            echo $cadena3."<br>";

           

            ?>    

            

        </h1>

        

    </body>


</html>