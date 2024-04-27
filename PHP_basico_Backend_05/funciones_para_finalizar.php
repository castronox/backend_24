<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funciones para finalizar PHP</title>
</head>
<body>

	<h1>Finalizando la ejecución</h1>

	<p>Las funciones die() y exit() permiten finalizar la ejecución del
		script en un punto concreto.</p>
    
    <?php
    $user = NULL;

    // Finaliza la ejecución si es NULL.

    if (! $user)
        die("<p class='error'> Debes estar identificado para acceder");

    echo "<p>No llegaremos a este punto si user es null.</p>";
    ?>


</body>
</html>