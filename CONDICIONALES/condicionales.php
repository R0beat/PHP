<?php 
  $var1 = true;
  $var2 = false; 

echo '
<h1>USANDO CONDICIONALES</h2>
<form action=""  class="" method="post" name="datos_usuario" id="datos_usuario">

    <table align="center" class="">
      <tr>
	<td><label for="nombre_usuario">Nombre :</label></td>
	<td><input type="text" name="nombre_usuario"></td>
      
      </tr>
      <tr>
	<td><label for="edad_usuario">Edad: </label></td>
	<td><input type="text" name="edad_usuario"</td>
      </tr>
      <tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
      </tr>
      <tr>
	<td> <input type="submit" class="btn btn-outline-success" name="enviando" value="Enviar"></td>
      </tr>
    </table>
';
  if(isset($_POST["enviando"])){
    $edad = $_POST["edad_usuario"];
    if($edad <= 18){
      echo "eres menor de edad";
    }
    else if($edad <= 40){
      echo "eres Joven";
    }
    else if($edad <= 65){
      echo "eres maduro";
    }
    else{
      echo "cuidate mucho!!";
    }
  }

?>
