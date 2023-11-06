<?php
echo "Uso de las variables GLOBALS \n";
function test(){
  $foo = "variable declarada en la funcion";
  echo '$foo en el ambito global: '.$GLOBALS["foo"]."\n";
  echo '$foo en el ambito simple: '. $foo ."\n";
}

$foo = "Hola mundo";
test();

echo "Uso de la variable SERVER \n";
echo "$_SERVER";
?>
