<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de formulario por POST</title>
</head>
<body>

	<h1>Ejemplo de formulario utilizando el método POST</h1>


	<form method="POST">
		<input type="hidden" name="enviar" value="1" /> <label>Nombre : </label>
		<input type="text" name="nombre" /> <br /> <label>Apellidos : </label>
		<input type="text" name="apellidos" /> <br /> <input type="submit"
			value="enviar" />

	</form>
	<br />
    <?php

    // Comprueba si llega el formulario
    if (isset($_POST['enviar'])) {

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];

        echo "Bienvenido $nombre $apellidos";
    }
    ?>


</body>
</html>