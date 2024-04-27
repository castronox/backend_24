<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Operador ternario</title>
</head>
<body>

	<form method="post">

		<label>Nombre:</label> <input type="text" name="nombre" required> <br>
		<label>Apellidos:</label> <input type="text" name="apellido" required>
		<br> <input type="submit" value="enviar">

	</form>
		
		
		

    <?php
    // recupera el nombre que llega desde el formulario (si llega)
    $nombre = empty($_POST['nombre']) ? 'Anónimo' : $_POST['nombre'];

    // Recupera el apellido, con ?? es más corto
    $apellido = $_POST['apellido'] ?? 'Anónimo';

    echo "<p>Tu nombre es $nombre $apellido. </p>";

    ?>


</body>
</html>