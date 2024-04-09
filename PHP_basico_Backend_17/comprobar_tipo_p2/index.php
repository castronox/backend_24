<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobación de tipo de fichero PHP</title>
</head>
<body>
    
    <h1>Subida de ficheros</h1>
    <p>Uso de FileInfo para recuperar el tipo MIME del fichero</p>
	
	
	<form method = "POST" enctype = "multipart/form-data" action = "upload.php">
	<label>Fichero:</label>
	<br>
	<input type = "file" name = "fichero">
	<br>
	<input type= "submit" value = "Enviar">
	
	</form>


</body>
</html>