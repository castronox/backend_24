<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario enviado por GET</title>
</head>
<body>


	<h1>Ejemplo formulario GET</h1>

	<p>Este formulario se envía por GET, porque si no se indica el método
		en el formulario, por defecto es GET.</p>

	<form>

		<input type="hidden" name="enviar" value="1" /> <label>Nombre:</label>
		<input type="text" name="nombre" required /> <br /> <label>Apellidos:</label>
		<input type="text" name="apellidos" required /> <br /> <input
			type="submit" value="enviar" />

	</form>

	<h2>Datos recibidos por el método GET</h2>
	<pre><?= var_dump($_GET) ?></pre>




</body>
</html>