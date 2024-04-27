    <?php
    session_start(); // Inicia o reanuda la sesión

    $_SESSION['nombre'] = 'Pepe'; // Guardamos algo en sesión otra vez

    // Seguimos con las sesiones //otro ejemplo
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sesiones en PHP</title>
</head>
<body>
	<h1>Ejemplo de sesiones</h1>

	<p>
		Este es un ejeplo del dato guardado: <b><?= $_SESSION['nombre'] ?></b>,
		prueba a cambiar a la pagina 2 y verás como es recordado entre
		distintas peticiones.
	</p>


	<a href="variables_sesion_2.php">Página 2</a>



</body>
</html>