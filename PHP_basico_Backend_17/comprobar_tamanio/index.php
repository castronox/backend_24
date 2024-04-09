<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar tamaño en PHP</title>
</head>
<body>

<h1> Subida y comporobación del tamaño de los ficheros en PHP</h1>

<p>Comprobaremos el tamaño con is_uploaded_file a continuación:</p>
    
            <form method = "POST" enctype = "multipart/form-data" action = "upload.php">
            
                    		<label>Fichero: </label>
                    	<br>
                    		<input type = "file" name = "fichero">
                    	<br>
                    		<input type = "submit" value = "Enviar">
            
            </form>


</body>
</html>
