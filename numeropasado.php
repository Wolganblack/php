<?php
    /*Imprimir por pantalla la tabla de multiplicar del número pasado en un parámetro GET por la URL*/

    
    
    if (isset($_GET["numero"]) && is_numeric($_GET["numero"])){
        $numero=$_GET["numero"];
    }
    else{    
        $numero=20;
    }
    echo ("Tabla de multiplicar de ".$numero."\n");
    for ($i=1; $i<=10; $i++){
        echo $numero."x".$i."=".($numero*$i)."\n";
    }
?>