<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload múltiple PHP</title>
</head>
<body>

	<h2>Upload múltiple desde un único input.</h2>
			
		<form method = "POST" enctype = "multipart/form-data" action = "upload.php">
			
			<label>Sube múltiples ficheros:</label>
				<br>
					<input type = "hidden" name = "MAX_FILE_SIZE" value = "12240000">
					<input type = "file" multiple name = "ficheros[]">
				<br>
			<input type = "submit" value = "Enviar">
		</form>



</body>
</html>