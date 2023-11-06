<?php 
/*	funciones predefinidas son las que vienen con el lenguaje
 *	funciones propias
 */
// funcion predefinida
//  $palabra = "LIA";
//  echo "Uso de la funcion predefinida strtolower"."<br>";
//  echo $palabra."<br>";
//  echo strtolower($palabra);
//
//  //Funcion propia
//  function suma($a,$b){
//    $resultado = $a + $b;
//    return $resultado;
//  }
//  echo "<br>";
//   echo( suma(4,3));

//  echo "Funcion que cambia de mayusculas a minisculas";
//  function frase_m ($frase,$conversion=true){
//    $frase = strtolower($frase);
//    if($conversion==true){
//      $resultado = ucwords($frase);
//    }
//    else{
//      $resultado = strtoupper($frase);
//    }
//    return $resultado;
//  }
//  echo "<br>";
//  echo(frase_m("hola mundo",false));
//  echo "<br>";
//
//  echo "Funcion con referencia <br>";
//  function incrementa(&$valor){
//    $valor++;
//    return $valor;
//  }
//  $numero = 5;
//  echo incrementa($numero);
//  echo $numero;
function cambia_mayus($a){
  $a = strtolower($a); //cambia las mayusculas a minusculas
  $a = ucwords($a); //Cambia a mayusculas la primera letra de la pabra
  return $a;
}
$cadena = "hOLA mUNDO";
echo cambia_mayus($cadena)."<br>"
?>

