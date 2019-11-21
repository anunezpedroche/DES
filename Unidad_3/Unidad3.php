<html>
    <body>
    <h1>Unidad 3</h1>
        <?php
            //Ejercicio 1
            echo('<h2>Ejercicio 1</h2>');
            $a=1;
            if(is_int($a)){
                echo('Es entero <br>');
            }
            //Ejercicio 2
            echo('<h2>Ejercicio 2</h2>');
            $b=0;
            echo('La variable vale '.$b.'<br>');
            $b++;
            echo('La variable vale '.$b.'<br>');
            ++$b;
            echo('La variable vale '.$b.'<br>');
            $b= $b  +1;
            echo('La variable vale '.$b.'<br>');
            //Ejercicio 3
            echo('<h2>Ejercicio 3</h2>');
            $c=2;
            $d=2;
            if($c==$d){
                echo($c.' es igual que '.$d.'<br>');
            }
            if($c>$d){
                echo($c.' es mayor que '.$d.'<br>');
            }
            if($c<=$d){
                echo($c.' es menor o igual que '.$d.'<br>');
            }
            if($c!=$d){
                echo($c.' es distinto que '.$d.'<br>');
            }
            //Ejercicio 4
            echo('<h2>Ejercicio 4</h2>');
            $c=2;
            $d=2;
            if($c++==++$d){
                echo($c.' es igual que '.$d.'<br>');
            }
            if($c!=$d){
                echo($c.' es distinto que '.$d.'<br>');
            }
            //Ejercicio 5
            echo('<h2>Ejercicio 5</h2>');
            echo PHP_OS ;
            echo TRUE;
            ?>
    </body>

</html>