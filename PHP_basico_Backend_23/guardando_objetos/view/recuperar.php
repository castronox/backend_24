<?php
include_once 'config/config.php';
include_once 'libraries/autoload.php';
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Recupera objetos de las SESIONES</title>
	<link rel="stylesheet" type="text/css"
		href="https://robertsallent.com/css/generic.css">
</head>
<body>
<h2>EJEMPLO de recuperación de objetos de las sesiones</h2>

<pre>
<?php 
$usuario = $_SESSION['user']; // Recupera el objeto de la sesión
var_dump($usuario);
?>
</pre>

<a href ="informacion_sesion.php">COOKIES sesión info.</a><br>
<a href ="guardar.php">Guardar</a><br>

</body>
</html>