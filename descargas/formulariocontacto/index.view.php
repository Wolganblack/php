<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario conctaro</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&family=Roboto:wght@100&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

      <div class="swap">
      	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method ="post">
      		<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">

      		<input type="text" class="form-control"id= ="correo" name = "correo" placeholder="Correo:" value="">
      		<textarea name="mensaje" class="form-control" id="mensaje"  placeholder="Mensaje:"></textarea>
      		<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">

      	</form>
      </div>
</body>
</html>