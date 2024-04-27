<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ámbito de variables de PHP</title>
</head>
<body>
	<h1>La variable superglobal $_SERVER</h1>
    <?php

    // navegador del cliente...
    echo "Tu navegador: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

    // ip de la maquina que realiza la petición
    echo "Tu IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";

    // Software del servidor
    echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";

    // muestra todo lo que hay en $_SERVER
    echo "<pre>";
    var_dump($_SERVER);
    echo "<pre>";
    // Seguimos con ejemplos de github 2.0
    ?>

	
</body>
</html>