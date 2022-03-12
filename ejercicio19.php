<?php
function factorial($numero)
{
    $fact=1;

    for($i=$numero;$i>1;$i--)
    {
        $fact=$fact*$i;

    }
    return $fact;
}


$valor= factorial(5);
echo $valor.PHP_EOL;

?>