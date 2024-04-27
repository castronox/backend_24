<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo request en PHP</title>
</head>
<body>


	<h1>Ejemplo REQUEST en PHP</h1>

	<p>Cambia el método del formulrio entre POST y GET</p>

	<form method='POST'>

		<input type="hidden" name="enviar" value="1" /> <label>Nombre:</label>
		<input type="text" name="nombre" /><br /> <label>Apellido:</label> <input
			type="text" name="apellido" /><br /> <input type="submit"
			class="button" value="enviar" />

	</form>

	<h2>POST</h2>
	<pre><?php var_dump($_POST) ?></pre>

	<h2>GET</h2>
	<pre><?php var_dump($_GET) ?></pre>

	<h2>REQUEST</h2>
	<pre><?php var_dump($_REQUEST) ?></pre>


</body>
</html>