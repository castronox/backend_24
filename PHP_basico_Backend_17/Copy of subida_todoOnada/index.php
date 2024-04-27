<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subida múltiple de Ficheros en PHP</title>
</head>
<body>
	<h1>Subida Múltiple de Ficheros en PHP</h1>
	<p>Si alguno falla no se sube pero el resto sí</p>

	<form method="POST" enctype="multipart/form-data" action="upload.php">

		<label>Sube las fotos del producto:</label> <br> <input type="file"
			accept="image/*" name="fichero1"> <br> <input type="file"
			accept="image/*" name="fichero2"> <br> <input type="file"
			accept="image/*" name="fichero3"> <br> <input type="submit"
			value="Enviar">
	</form>


</body>
</html>

