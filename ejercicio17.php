<?php
/**Ejercicio 18. Crea un array con el contenido de la siguiente tabla: 
Frutas Deportes Idiomas
Manzana Futbol Español
Naranja Tenis Inglés
Sandia Baloncesto Francés
Fresa Beisbol Italian 
*/
$array=[
    [
        "frutas"=>"manzana",
        "deportes"=>"futbol",
        "idiomas"=>"espanol",
    ],
    [
        "frutas"=>"naranja",
        "deportes"=>"tenis",
        "idiomas"=>"ingles",
    ],

    [
        "frutas"=>"sandia",
        "deportes"=>"baloncesto",
        "idiomas"=>"frances",
    ],
    [
        "frutas"=>"fresa",
        "deportes"=>"beisbol",
        "idiomas"=>"italiano",
    ],

];

$primerfila=reset($array);
echo '<table style="border: 1px solid #C00">'; 
echo '<thead> <tr>';
foreach($primerfila as $c => $v)
{
    echo '<th>'.$c . '</th>'; 
}
echo '</tr> </thead>';
foreach($array as $fila)
{
    echo '<tr>';
    foreach($fila as $celda)
    {
        echo '<td>'.$celda.'</td>';
    }

    echo '</tr>';

}

echo '</table>';
?>