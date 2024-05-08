<?php
include '../config/config.php';
include '../libraries/autoload.php';

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Guarda objetos de las SESIONES</title>
	<link rel="stylesheet" type="text/css"
		href="https://robertsallent.com/css/generic.css">
</head>
<body>
<h2>EJEMPLO de guardado de objetos de las sesiones</h2>


<?php 
$usuario = new Usuario('Pablito', '123456', ['ROLE_ADMIN']);
$_SESSION['user']= $usuario; // Guarda el objeto de la sesión
?>



<a href ="index.php">Login</a><br>

</body>
</html>