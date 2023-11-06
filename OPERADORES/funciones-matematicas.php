<?php
$random = rand(1,50);
$potencia = pow(5,2);
$round = round(5.75745645645);
$round2 = round(5.75745645645,2);
echo "EL resultado de la potencia es: ".$potencia."<br>";
echo "El numero aleatorio es: ".$random."<br>";
echo "Ejemplo de la funcion round() con argumentos opcionales: ". $round."<br>";
echo "Ejemplo de la funcion round() sin argumentos opcionales: ". $round2."<br>";

/* Casting
    Conversion de tipos
    ejemplo de string a inst

    Existesn 2 tipos implicitas explicito  
 */

//Implicito esta se hace suegun el contexto

$num = "5";
echo gettype($num)."<b>";
$num +=2;
echo  $num."<br>";
echo gettype($num);
echo "<br>";
/*
 * Explicito
 */
$numero = "5";
echo  ' la variable $numero es de tipo: ';
echo gettype($numero);
echo "<br>";
$casting = (int)$numero;
echo 'El tipo de la  variable $casting es de tipo: ';
echo gettype($casting)
?>
