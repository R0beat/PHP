<?php
/*
echo " funcion que compara 2 numeros <br>";
function iguales ($a,$b){
  if($a != $b){
    echo "son diferentes";
  }
  else{
    echo "no son diferentes";
  }
}
echo iguales(4,4)
 */
echo '
<form action=""  class="m-0 vh-100 row justify-content-center align-items-center" method="post" name="datos_usuario" id="datos_usuario">

    <table align="" class=" col-auto p-5 text-center">
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
if(isset($_POST['enviando'])){
  $usuario = $_POST['nombre_usuario'];
  $edad = $_POST['edad_usuario'];
  if($usuario == 'Lia' && $edad >= 18){
    echo '<div class="alert alert-success" role="alert">
	    Puedes entrar!
	  </div> ';
  }
  else{
    echo '
	  <div class="alert alert-danger" role="alert">
	    No puedes entrar!
	  </div>
';
  }

}
echo '</form>'
?>
