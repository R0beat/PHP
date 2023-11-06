<?php
    $nombre = $_POST['nombre'];
    if($_POST){
      echo '<h1 style="color: red;"> hola '.$nombre.'</h1>'; 
    }
  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
 <form action="post.php" method="POST">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre">
  <input type="submit" value="ENVIAR">
  <br> 
  </form> 
</body>
</html>
