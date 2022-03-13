<?php

$pizza= "porcion 1 porcion 2 porcion 3 porcion 4 porcion 5 porcion 6";

$porciones = explode(" ", $pizza);


foreach($porciones as $porcion)
{
    echo PHP_EOL. $porcion;

}
?>