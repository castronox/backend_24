<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento PHP</title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data" action="upload.php">

		<label>Sube tu imágen de perfil:</label> <br> <input type="hidden"
			name="MAX_FILE_SIZE" value="5000000"> <input type="file"
			accept="image/*" name="fichero1"> <br> <br> <input type="hidden"
			name="MAX_FILE_SIZE" value="7000000"> <input type="file"
			accept="image/*" name="fichero2"> <br> <br> <input type="hidden"
			name="MAX_FILE_SIZE" value="1000000"> <input type="file"
			accept="image/*" name="fichero3"> <br> <input type="submit"
			value="Enviar">

	</form>


</body>
</html>