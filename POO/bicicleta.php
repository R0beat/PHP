<?php
//Objeto Bicicleta
class Bicicleta {
  var $ruedas;
  var $color;
  var $velocidades;

  //Constructor inicial de la clase
  function __construct(){
    //$this es una referencia al objeto invocador.
    $this -> ruedas=2;
    $this -> color="";
    $this -> velocidades=7;
  }
  function arrancar(){
    echo "La Bicicleta esta arrancando <br>";
  }
  function cambio (){
    echo "La Bicicleta hizo un cambio <br>";
  }
  function frenar(){
    echo "La Bicicleta esta frnendo";
  }
  function establece_color($a,$b){
    $this->color=$a;
    echo "El color de ".$b." es ".$this->color."<br>";

  }
}
$scott = new Bicicleta();
$treck = new Bicicleta();


echo $scott ->arrancar();

?>
