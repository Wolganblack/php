<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servidor ='127.0.0.1';
    $username = 'root';
    $password = 'LINUX1983';
    $database = 'sabatino';
    $port = 3306;


    $cn = mysqli_connect($servidor, $username, $password, $database, $port);
    if (!$cn) {
        echo "No se pudo conectar al servidor" . PHP_EOL. '</br>';
    } else

        echo "Conexion satisfacoria" .  PHP_EOL.'</br>';

    $base_de_datos = 'sabatino';

    $db = mysqli_select_db($cn, "sabatino");

    if (!$db) {
        echo "La base de datos no existe" . '</br>';
    } else

        echo "Base de datos seleccionada correctamente" .  PHP_EOL.'</br>';

    $rs = mysqli_query($cn, "select * from estudiante");
  

    if ($rs) {
        echo "Consulta correcta" . PHP_EOL.'</br>';
    } else

        echo "Consulta erronea" . PHP_EOL.'</br>';

         $resultados=mysqli_num_rows($rs);

         echo "los resultados son:".$resultados.PHP_EOL.'</br>';                             

    $cnn = mysqli_close($cn);
    if ($cnn) {

        echo  "Conexion cerrada";
    }


    ?>
</body>

</html>