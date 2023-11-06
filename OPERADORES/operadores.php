<?php
echo '
<form name="form1" method="post" action="">
        <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>suma</option>
            <option>resta</option>
            <option>multiplicación</option>
            <option>división</option>
            <option>módulo</option>
        </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
        </p>
    </form>
 ';
if(isset($_POST["button"])){
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operacion = $_POST["operacion"];
  if(!strcmp("suma",$operacion)){
    echo " el resultado de la suma es ".($num1+$num2);
  }
  if(!strcmp("resta",$operacion)){
    echo " el resultado de la resta es ".($num1-$num2);
  }
  if(!strcmp("multiplicación",$operacion)){
    echo " el resultado de la multiplicación es ".($num1*$num2);
  }
  if(!strcmp("división",$operacion)){
    echo " el resultado de la división es ".($num1/$num2);
  }
  if(!strcmp("módulo",$operacion)){
    echo " el resultado del módulo es ".($num1%$num2);
  }
}
?>
