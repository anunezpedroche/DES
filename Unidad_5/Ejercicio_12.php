<html>
    <head>
        <title>
            Simulador de paloma mensajera
        </title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style type="text/css">
            div.map {
                float:left;
                text-align: center;
                border: 1px solid #666;
                background-color: #fcfcfc;
                margin: 5px;
                padding: 1em;
            }
            span.casa, span.paloma {
                font-weight: bold;
                color: red;
            }
            span.aire {
                color: blue;
            }
               
        </style>
    </head>
    <body>
       
        <h1>
            <?php

            $tamañoMapa=10;
           
            # Posicionar la paloma
           
            //do
            //{
                $casaX = rand (0,$tamañoMapa-1);
                $casaY = rand (0,$tamañoMapa-1);
                $pelotaX = rand (0,$tamañoMapa-1);
                $pelotaY = rand (0,$tamañoMapa-1);
                $pelota2X = rand (0,$tamañoMapa-1);
                $pelota2Y = rand (0,$tamañoMapa-1);
                $pelota3X = rand (0,$tamañoMapa-1);
                $pelota3Y = rand (0,$tamañoMapa-1); 
                $franjaX = rand(0,$tamañoMapa-1);
            //} while ((abs($casaX-$pelotaX)<$tamañoMapa/2)&&(abs($casaY-$pelotaY)<$tamañoMapa/2)&&(abs($casaX-$pelota2X)<$tamañoMapa/2)&&(abs($casaY-$pelota2Y)<$tamañoMapa/2)&&(abs($casaX-$pelota3X)<$tamañoMapa/2)&&(abs($casaY-$pelota3Y)<$tamañoMapa/2));
            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.
           $count = 0;
           $vuelta = 0;
           $vuelta2= 0;
           $vuelta3= 0;
           $vuelta4= 0;
           $vuelta5= 0;
           $vuelta6= 0;
           $franjaVuelta = 0;
           $franjaY =$tamañoMapa-1;
            do{ 

                //---------------------------PLATAFORMA--------------------------

                if($franjaVuelta==0){
                    $franjaX++;
                }
                if($franjaVuelta == 1){
                    $franjaX--;
                }

                if($franjaX == $tamañoMapa-1){
                    $franjaVuelta = 1;
                }elseif ($franjaX == 0){
                    $franjaVuelta = 0;
                }
                //PELOTA 1 -----------------------------------------------------------------------
                if($pelotaX==$tamañoMapa || ($pelotaY == $franjaY-1&&$pelotaX == $franjaX-1)){
                    $count++;
                    $pelotaX--;
                    $vuelta=1;
                }
                if($pelotaX==0){
                    $pelotaX++;
                    $count++;
                    $vuelta=0;
                }
                if($pelotaY==$tamañoMapa || ($pelotaY == $franjaY-1&&$pelotaX == $franjaX-1)){
                    $pelotaY--;
                    $count++;
                    $vuelta2=1;
                }
                if($pelotaY==0){
                    $pelotaY++;
                    $count++;
                    $vuelta2=0;
                }
                if($vuelta==0){
                    $pelotaX++;

                }
                
                if($vuelta==1){
                    $pelotaX--;
                }


                if($vuelta2==0){
                    $pelotaY++;
                }

                if($vuelta2==1){
                    $pelotaY--;
                }


                //PELOTA 2 -------------------------------------------------------------------
                if($pelota2X==$tamañoMapa  || ($pelota2Y == $franjaY-1&&$pelota2X == $franjaX-1)){
                    //$pelota2X--;
                    $count++;
                    $vuelta3=1;
                }
                if($pelota2X==0){
                    //$pelota2X++;
                    $count++;
                    $vuelta3=0;
                }
                if($pelota2Y==$tamañoMapa  || ($pelota2Y == $franjaY-1&&$pelota2X == $franjaX-1)){
                    $count++;
                    $vuelta4=1;
                }
                if($pelota2Y==0){
                    $count++;
                    $vuelta4=0;
                }


                if($vuelta3==0){
                    $pelota2X++;

                }
                if($vuelta3==1){
                    $pelota2X--;
                }


                if($vuelta4==0){
                    $pelota2Y++;
                }

                if($vuelta4==1){
                    $pelota2Y--;
                }

                //PELOTA 3 -------------------------------------------------------------------
                if($pelota3Y==$tamañoMapa-1 || (($pelota3Y == $franjaY)&&($pelota3X == $franjaX))){
                    $pelota3Y--;
                    $count++;
                    $vuelta6=1;
                }
                if((($pelota3Y == $franjaY-1)&&($pelota3X == $franjaX-1))){
                    $vuelta5 = 1;
                    $vuelta6 = 1;
                }
                if($pelota3X==$tamañoMapa-1 || (($pelota3Y == $franjaY)&&($pelota3X == $franjaX))){
                    $pelota3X--; 
                    $count++;
                    $vuelta5=1;
                }
                if($pelota3X==0){
                    $pelota3X++;
                    $count++;
                    $vuelta5=0;
                }
                if($pelota3Y==0){
                    $pelota3Y++;
                    $count++;
                    $vuelta6=0;
                }
                if($vuelta5==0){
                    $pelota3X++;

                }

                if($vuelta5==1){
                    $pelota3X--;
                }


                if($vuelta6==0){
                    $pelota3Y++;
                }

                if($vuelta6==1){
                    $pelota3Y--;
                }

                
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                        /*if ($x == $casaX && $y == $casaY)
                        {
                            echo '<span class="casa">+</span>'; //Casa
                        }*/
                        if ($x == $pelotaX && $y == $pelotaY)
                        {
                            echo '<span class="paloma">1</span>'; #Paloma
                        }
                        elseif ($x == $pelota2X && $y == $pelota2Y)
                        {
                            echo '<span class="paloma">2</span>'; #Paloma
                        }
                        elseif ($x == $pelota3X && $y == $pelota3Y)
                        {
                            echo '<span class="paloma">3</span>'; #Paloma
                        }elseif($x == $franjaX && $y ==$franjaY){
                            echo '<span class="paloma">-</span>';
                        }
                        else
                        {
                            echo '<span class="aire">.</span>'; #Aire
                        }
                       
                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                    
                }
                echo "</pre><h6>Paloma 1<div></h6>X=$pelotaX Y=$pelotaY<h6>Rebotes=$count</h6></div></div>\n";
            
            } while ($count<6);
          
            ?>   
           
        </h1>
       
    </body>

</html>