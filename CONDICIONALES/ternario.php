<?php
echo '
<h1> OPERADOR TERNARIO</h1>
<form action=""  class="" method="post" name="datos_usuario" id="datos_usuario">

    <table align="center" class=" ">
      <tr>
	<td><label for="nombre_usuario">Nombre :</label></td>
	<td><input type="text" name="nombre_usuario"></td>
      
      </tr>
      <tr>
	<td><label for="contra">Contraseña: </label></td>
	<td><input type="password" name="contra"</td>
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
    $contra = $_POST["contra"];
    $nombre = $_POST["nombre_usuario"];
    /*
    if($nombre == "Roberto" && $contra == '1234' ){
      echo '<p class="no-validado">No puedes entrar!</p>';
      
    }
    else{
     echo '<p class="validado">Puedes entrar!</p>' ;
    }
     */
    echo $nombre == "Roberto" && $contra == '1234' ? '<p class="validado">Puedes entrar!</p>':'<p class="no-validado">No puedes entrar!</p>';
      
  
}

?>
