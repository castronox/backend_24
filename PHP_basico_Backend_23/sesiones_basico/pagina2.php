<?php
session_start(); # INICIA o REANUDA  la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SESIONES</title>
	<link rel="stylesheet" type="text/css"
		href="https://robertsallent.com/css/generic.css">
</head>
<body>
<h2>EJEMPLO de sesiones</h2>

<p>Veamos si sigue el dato guardado: <b><?= $_SESSION['nombre'] ?? "El dato no existe" ?></b></p>
<a href ="pagina3.php">Página 3</a><br>
<a href ="index.php">Volver a Inicio</a>
</body>
</html>