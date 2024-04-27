<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Datos recibido por GET en PHP</title>
</head>
<body>

	<h1>Recuperando datos via GET</h1>

	<form method="GET">

		<input type="hidden" name="enviar" value="1" /> <label>Nombre : </label>
		<input type="text" name="nombre" /> <br /> <label>Apellidos : </label>
		<input type="text" name="apellido" /> <br> <input type="submit"
			class="button" value="Enviar" />

	</form>



    
    <?php
    // Comprueba si llega el formulario.
    if (isset($_GET['enviar'])) {

        $nombre = $_GET['nombre'];

        $apellido = $_GET['apellido'];

        echo "Bienvenido $nombre $apellido.";
    }

    ?>


</body>
</html>