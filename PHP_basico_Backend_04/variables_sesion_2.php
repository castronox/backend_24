<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento PHP</title>
</head>
<body>
	<h1>Ejemplo de sesiones</h1>
	<p>
		Veamos si el dato sigue guardado: <b><?= $_SESSION['nombre'] ?? 'El dato no existe' ?></b>
	</p>
	<a href="variables_sesion.php">Página 1</a>


</body>
</html>