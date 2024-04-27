
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento PHP</title>
</head>
<body>

	<form method="POST">

		<label>Nombre:</label> <input type="text" name="nombre" required> <br>
		<label>Edad:</label> <input type="number" name="edad" required> <br> <label>Teléfono:</label>
		<input type="number" name="telefono" required> <br> <input
			type="submit" name="guardar" value="Guardar">

	</form>




</body>
</html>



<?php

# Si llega el formulario
if (! empty($_POST['guardar'])) {

    # Recupera los valores
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];

    # Abre el fichero para añadir contenido
    $fichero = fopen('textos/usuarios.dat', 'a');

    # Escribe en el fichero con formato y lo cierra
    fprintf($fichero, "\n%s %d %s", $nombre, $edad, $telefono);
    fclose($fichero);

    echo "$nombre guardado.";
}

?>
