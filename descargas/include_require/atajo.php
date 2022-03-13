<?php

//$edad = (isset($edad)) ? :;

$edad = 18;


//echo isset($edad).'<br>', '</br>';

$edad = (isset($edad)) ? $edad: 'El usuario no establecio su edad';
echo 'Edad:'. $edad;

?>