<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php 
function incremento(){
  static $contador = 0 ;
  $contador ++;
  echo $contador;
}
incremento();
?>
</body>
</html>
