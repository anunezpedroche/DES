<html>
  
    <body>
        <?php
         
          final class Vehiculo
          {
            public $puertas;
            public $color;
            public $km;
            public $combustible;
           
            public function __construct($puertas,$color,$km,$combustible) # Método constructor
            {
              //Construimos el objeto padre
                $this->puertas=$puertas;
                $this->color=$color;
                $this->km=$km;
                $this->combustible=$combustible;
            
              }
              
              //Implementamos métodos

            public function incrementarKm($km) 
            {
                $this->km+=$km; 
            }
            public function obtenerKm(){
                return $this->km;
            }
          }

          class Coche extends Vehiculo
          //Creamos la clase hija y añadimos los métodos
          {

            public function incrementarKm($km){

                $this->km+=$km;
            }
          }


          $miCoche = new Coche(4,'azul',150,'diesel');
          $miCoche->incrementarKm(20);
          //Comprobamos que al llamar a la clase hija no aparece la clase padre
          echo $miCoche->obtenerKm();

        ?>
       
    </body>
   
</html>