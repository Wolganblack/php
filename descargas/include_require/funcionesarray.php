<?php

$amigo =array('telefono'=>205080,'edad'=>20,'pais'=>'mexico');

extract($amigo);

echo $edad. '<br/>';

$semana =array('Lunes','Martes','Miercoles','Jueves','Viernes',
'Sabado','Domingo');
$ultimodia=array_pop($semana);
echo $ultimodia. '<br/>';
echo join('</br>',$semana).'<br/>';
foreach($semana as $dia)
{

    echo $dia. '<br/>';
}

echo count($semana);

?>