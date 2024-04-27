<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Guardado de datos en base de datos con PHP</title>
</head>
<body>

	<h1>Guarda tema en BASE DE DATOS "biblioteca"</h1>

	<p>Formulario que permitirá introducir datos en la tabla temas de la
		base de datos de BIBLIOTECA</p>


	<form method="post" autocomplete="off">
		<label>Tema:</label> <input type="text" name="tema" /> <br /> <label>Descripción</label>
		<input type="text" name="descripcion" /> <br /> <input type="submit"
			name="guardar" value="guardar_t" />
	</form>
    
    			<?php
    if (! empty($_POST['guardar'])) { # Si llegan datos

        $conexion = new mysqli('localhost', 'root', '', 'biblioteca');
        $conexion->set_charset('utf8');

        // Recupera los datos que vienen por POST

        $tema = $_POST['tema'];
        $descripcion = $_POST['descripcion'];

        // Consulta preparada
        $consulta = "INSERT INTO temas(tema,descripcion)
                                 VALUES ('$tema','$descripcion')";

        // Ejecución de la consulta apuntando a la BBDD
        echo $conexion->query($consulta) ? 'Guardado OK' : 'Guardado NOK';
    }

    ?>


</body>
</html>