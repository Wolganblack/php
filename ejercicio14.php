<?php
/**Ejercicio 14. Escribe un programa que añada valores a un array mientras que su
longitud sea menor a 100 y después que se muestre la información del array por
pantalla. */

$numeros=[];

for($i=0; $i<100; $i++)
{

   $numeros[] = rand();

}

foreach($numeros as $num)
{

    echo $num.PHP_EOL;
    
}




?>