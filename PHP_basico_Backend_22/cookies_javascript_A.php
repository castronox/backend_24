<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>COOKIES de JavaScript a PHP</title>

</head>
<body>
<h2>Recibiendo la COOKIE de JAVASCRIPT a PHP</h2>

<p>Creación de COOKIES  en el cliente.</p>

<p>No se recibirán en el servidor hasta que no refresques la página con F5.</p>

<script>
	document.cookie = 'aula=A35; expires=Mon, 9 May 2024 00:00:00 UTC';
</script>

<?= $_COOKIE['aula'] ?? '<p>La cookie no existe</p>'?>
</body>
</html>
















