<?php

$meses =array(
	'Enero','Febrero','Marzo','Abril',
	'Mayo','Junio','Agosto','Septiembre'
	,'Octubre','Noviembre','Diciembre');
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Meses del año</title>
	</head>
	<body>
	<h1>Meses del año </h1>
	<ul> 
		<li><?php echo $meses[0];?></li>
		<li><?php echo $meses[1];?></li>
		<li><?php echo $meses[2];?></li>
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