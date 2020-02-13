<html>
  
    <body>
        <?php
         
          abstract class Vehiculo
          {
            public $color;
            public $km;
            public $combustible;
           
            public function __construct($color,$km,$combustible) # Método constructor
            {
              //Construimos el objeto padre
                
                private $color = 'negro';
                private $km = 10;
                private $combustible = 'diesel';

                public function obtenerColor(){
                    return $this->color;
                }

                public function obtenerKm(){
                    return $this->km;
                }

                public function obtenerCombustible(){
                    return $this->combustible;
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
              
              //Implementamos métodos

            public function incrementarKm($km) 
            {
                $this->km+=$km; 
            }
          }

          class Coche extends Vehiculo
          //Creamos la clase hija y añadimos los métodos
          {
            private $puertas = 0;

            public function obtenerPuertas(){
                return $this->puertas;
            }
            public function ponerPuertas($puerta){
                $this->puertas=$puerta;
            }

            public function incrementarKm($km){
                $this->km+=$km;
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