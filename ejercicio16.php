<?php
/**Ejercicio 17. Crea un script PHP que tenga tres variables, 
 * una tipo array, otra tipo
string y 
otra boleana y que imprima un
 mensaje según el tipo de variable que sea.  */

 $array =[1,2,3];
 $str="Hola";
 $bool=true;

 echo "El tipo de dato es ".gettype($array).PHP_EOL;
 echo "El tipo de dato es ".gettype($str).PHP_EOL;
 echo "El tipo de dato es ".gettype($bool).PHP_EOL;


?>