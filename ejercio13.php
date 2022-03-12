<?php
/** Escribe un programa que muestre la dirección IP del usuario que
visita nuestra web y si usa Firefox darle la enhorabuena. */

$ip_usuario = $_SERVER['REMOTE_ADDR'];  


echo "La direccion IP es:".$ip_usuario;

$Navegador=$_SERVER['HTTP_USER_AGENT'];

$indice=strpos($Navegador,"Firefox");

if($indice!==false)
{

    echo "Enhorabuena";
}


?>