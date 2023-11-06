<?php
class Coche {
  //Propiedades o Atributos
  var $ruedas;
  var $color;
  var $motor;

  //Constructor el estado inicial de la clase

  function __construct(){ //Metodo Constructor
    // Referenciamos con $this a la clase coche
    $this -> ruedas=4;
    $this -> color="";
    $this -> motor=1600;
  }

  //Metodos definen el comportamiento
  function arrancar(){
    echo "El carro esta arrancando <br> ";
  
  }
  function girar(){
    echo "El carro esta girando<br>";

  }
  function frenar(){
    echo "El carro esta frenando <br> ";
  }
  function establece_color($a,$b){
      $this->color=$a;
      echo "El color de ".$b." es: ".$this->color."<br>";
  }

}

//Instanciando la clase
//$renault = new Coche();
//$mazda = new Coche();
//$seat = new Coche();
//$mazda->girar();

//Accedemos a una Propiedad
//echo ($mazda->ruedas);
//$renault->establece_color("Verde","Renault");
class Camion {
  //Propiedades o Atributos
  var $ruedas;
  var $color;
  var $motor;

  //Constructor el estado inicial de la clase

  function __construct(){ //Metodo Constructor
    // Referenciamos con $this a la clase coche
    $this -> ruedas=8;
    $this -> color="Gris";
    $this -> motor=2600;
  }

  //Metodos definen el comportamiento
  function arrancar(){
    echo "El carro esta arrancando <br> ";
  
  }
  function girar(){
    echo "El carro esta girando<br>";

  }
  function frenar(){
    echo "El carro esta frenando <br> ";
  }
}

?>
