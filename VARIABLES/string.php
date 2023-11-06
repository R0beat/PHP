<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>String</title>
  <style>
    .resaltar{
      color: magenta;
    }
  </style>
</head>
<body>
<?php
  echo "<p class='resaltar'>Ejemplo con comillas \"\" </p>";
  echo '<p class="resaltar">Ejemplo con  comilla \'</p>';
  echo "<p class=\"resaltar\">Ejemplo con escape de caracter \\ </p><br>";

  $var1 = "Hola";
  $var2 = "Hola";
  echo strcmp($var1,$var2); //Devuelve 1 si no son iguales y o si son iguales
  echo strcasecmp($var1,$var2); 
?> 
</body>
</html>
