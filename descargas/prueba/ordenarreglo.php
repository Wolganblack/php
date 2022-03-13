<?php

$meses =array(
	'Enero','Febrero','Marzo','Abril',
	'Mayo','Junio','Agosto','Septiembre'
	,'Octubre','Noviembre','Diciembre');
$numeros=array(1,22,33,10,9,5,70,100,20);
//sort($numeros);

rsort($numeros);

//sort($meses);
rsort($meses);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Numeros</title>
</head>
<body>
		<ul>
			<?php
			foreach ($numeros as $num) {
			echo '<li>'.$num.'</li>';
			}	
			?>
		</ul>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<ul>
			<?php
			foreach ($meses as $mes) {
			echo '<li>'.$mes.'</li>';
			}	
			?>
		</ul>
</body>
</html>
