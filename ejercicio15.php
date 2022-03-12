<?php
/**Ejercicio 16. Escribe un programa que compruebe si una variable 
 *  esta vacía y si
está vacía, rellenarla con texto en minúsculas y mostrarlo convertido a mayúsculas
en negrita. 
 */

$cadena;
if(empty($cadena))
{
    $cadena=$_GET['texto'];
    $cadena = strtolower($cadena);
    $cadena = strtoupper($cadena);

    echo '<strong>'.$cadena.'</strong>';
}


?>