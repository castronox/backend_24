<?= session_start(); ?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>La cookie con ID de SESION</title>
	<link rel="stylesheet" type="text/css"
		href="https://robertsallent.com/css/generic.css">
</head>
<body>
<h2>Parámetros de la sesión</h2>
<p>El nombre de la sesión es: <?= session_name()?>.</p>
<p>El ID de la sesión es: <?= session_id()?></p>

<h2>La COOKIE</h2>
<p>Contenido de la cookie PHPSESSID: <?= $_COOKIE['PHPSESSID']?>.</p>
<p>Detalles de la cookie:</p>
<pre><?php var_dump(session_get_cookie_params())?></pre>
</body>
</html>
