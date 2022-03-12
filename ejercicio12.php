<?php
/**Hacer un programa que tenga un array de 5 números enteros y hacer
lo siguiente con él:1
1. Recorrerlo y mostrarlo.
2. Ordenarlo y mostrarlo.
3. Mostrará su longitud.
4. Buscar en el vector
*/

$numeros = [];

for($i=1; $i <=5; )
{
    $valor = readline("Ingrese numero: ");
    if (is_numeric($valor)) {
        $numeros[] = intval($valor);
        $i++;
    }
}

foreach($numeros as $num)
{
    echo $num.PHP_EOL;
}
echo "===============".PHP_EOL;
sort($numeros);
foreach($numeros as $num)
{
    echo $num.PHP_EOL;
}
echo "===============".PHP_EOL;

echo "La longitud es ".count($numeros).PHP_EOL;

echo "===============".PHP_EOL;

$valor = readline("Ingrese numero a buscar: ");

$indice=array_search($valor,$numeros);
if($indice!==false)
{

    echo "El valor esta en la posicion ".$indice;
}
else
     echo "El valor no se encontro";
?>