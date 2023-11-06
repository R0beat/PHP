<?php 
/*
 * switch (condicion){		switch(condicion) :
 * 	case valor:			case valor;
 * 	break;				break;
 * 	default;			default;
 * }				endswitch
 */
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
    $contra = $_POST["edad"];
    $nombre = $_POST["nombre_usuario"];
}
switch ($nombre):
  case "Juan";
    echo '<p class="validado">Puedes entrar Juan!</p>' ;
    break;
  case "Maria";
    echo '<p class="validado">Puedes entrar Maria!</p>' ;
    break;
  case "Pedro";
    echo '<p class="validado">Puedes entrar Pedro!</p>' ;
    break;
  default:
    echo '<p class="no-validado">Usuario no encontrado!</p>' ;
    
endswitch
?>
