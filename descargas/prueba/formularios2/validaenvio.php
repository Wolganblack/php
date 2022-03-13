<?php
//if($_SERVER['REQUEST_METHOD']== 'POST')
//{ echo "Se enviarion por POST";
//} 
 //elseif ($_SERVER['REQUEST_METHOD']=='GET')
 //{ echo "Se enviaron por el metodo GET";
 //}
if(isset($_POST['submit']))
{

	echo "Se han enviado los datos correctamente";
	print_r($_POST['submit']);
}

?>
