<?php
      session_start(); # INICIA o REANUDA  la sesión 
      
      $_SESSION['nombre'] = 'Pepe'; # Guardamos algo en sesión 

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

<p>Este es el dato guardado: <b><?= $_SESSION['nombre'] ?></b>, prueba a cambiar a la página 2 y verás cómo es recordado entre distinta peticiones.</p>

<a href ="informacion_sesion.php">COOKIES sesión info.</a><br>
<a href ="pagina2.php">Página 2</a><br>
<a href ="pagina3.php">Página 3</a><br>
</body>
</html>