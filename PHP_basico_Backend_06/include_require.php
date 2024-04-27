<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Include y reequire en PHP</title>
</head>
<body>

	<h1>Include y reuquire en PHP</h1>

	<p>A continuación importaremos los archivos de la carpeta 'strings'
		comillas.php y funciones_strings.php</p>


    
    <?php
    echo "<h3> Ejemplo comillas.php</h3>";

    include 'strings/comillas.php';
    echo "<br><br>";
    echo "<h3> Ejemplo funciones_strings.php </h3>";
    require 'strings/funciones_strings.php';
    ?>


</body>
</html>