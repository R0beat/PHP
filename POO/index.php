<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php 
include('coche.php');

$mazda = new Coche();
$pegaso = new Camion();

echo "el pegaso tiene ".$pegaso->ruedas."<br>";
echo "el mazda tiene ".$mazda->ruedas."<br>";
?> 
</body>
</html>
