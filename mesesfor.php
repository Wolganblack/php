/*Ejercicio 6. Crear un array llamado meses y que almacene el nombre de los doce
meses del año. Recorrerlo con FOR para mostrar por pantalla los doce nombres. */

<?php

$meses=array("Enero", "Febrero", "Marzo" ,"Abril", "mayo", "junio", 
"julio", "agosto", "septiembre", "octubre", "noviembre","diciembre");



for($i=0;$i<sizeof($meses);$i++)
{
    echo $meses[$i];
    echo "\n";


}

?>