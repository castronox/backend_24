<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DConstantes en PHP</title>
</head>
<body>

	<h1>Constantes</h1>

	<p>La función defined() sirve para definir constantes.</p>

	<p>La función defined sirve para comprobar si una constante ha sido
		definida previamente.</p>
    
    <?php
    echo defined('DEBUG') ? '<p>Está definida</p>' : '<p>No está definida</p>';

    define('DEBUG', false);

    echo defined('DEBUG') ? '<p>Está definida.</p>' : '<p>Noestá definida</p>';

    ?>


</body>
</html>