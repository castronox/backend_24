<?php
session_start(); # INICIA o REANUDA  la sesión


# Con unset() podemos desinstalar una variable de sesión 
unset($_SESSION['nombre']);

# Para olvidar todas las variables de la sesión, podemos hacer:
# $_SESSION=[];
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
<a href ="pagina2.php">Volver a Página 2</a><br>
<a href ="index.php">Volver a Inicio</a>
</body>
</html>