<html>
  
    <body>
        <?php
         
          interface Vehiculo
          {

                public function obtenerColor();

                public function obtenerKm();

                public function obtenerCombustible();
              
          }

          class Coche extends Vehiculo
          //Creamos la clase hija y añadimos los métodos
          {
            private $puertas = 0;
            private $color = 0;
            private $combustible = 0;
            private $km = 0;            

            public function obtenerPuertas(){
                return $this->puertas;
            }
            public function ponerPuertas($puerta){
                $this->puertas=$puerta;
            }

            public function incrementarKm($km){
                $this->km+=$km;
            }
            public function ponerColor($col){
                $this->color = $col;
            }

            public function ponerKm($dist){
                $this->km = $dist;
            }

            public function ponerCombustible($comb){
                $this->combustible = $comb;
            }
          }

          class Moto extends Vehiculo
          {
              private $maleta = true;

              public function anyadirMaleta($male){
                  $this->maleta = $male;
              }
              public function obtenerMaleta(){
                  return $this->maleta;
              }
              public function ponerColor($col){
                $this->color = $col;
            }

            public function ponerKm($dist){
                $this->km = $dist;
            }

            public function ponerCombustible($comb){
                $this->combustible = $comb;
            }
            public function incrementarKm($km){
                $this->km+=$km;
            }
          }


          $miCoche = new Coche;
          $micoche->ponerColor('verde');
          $micoche->ponerCombustible('gasolina');
          $micoche->ponerKm(40);
          $micoche->ponerPuertas(4);
          $miCoche->incrementarKm(20);
          //Comprobamos que al llamar a la clase hija no aparece la clase padre
          echo $miCoche->obtenerKm();

        ?>
       
    </body>
   
</html>