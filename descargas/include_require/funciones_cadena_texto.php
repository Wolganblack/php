<?php

$texto='<> & "" ';
echo htmlspecialchars($texto);
echo '<br>';
echo strlen($texto);
$texto1='hola mundo';
echo '<br>';
echo substr($texto1,0,3);


?>