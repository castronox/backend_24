<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Parámetros por URL en PHP</title>
</head>
<body>
	<!-- Copiar esto en la cola de la URL del ejercicio: ?cat=lavadoras&prod=1234 -->

	<h1>Ejemplo GET</h1>

	<h2>Datos Recibidos por el método GET</h2>
	<br>
	<p>Escribe en la cola de la URL lo siguiente:</p>
	<p>?cat=lavadoras&prod=1234</p>
	<p>Se imprime lo siguiente a continuación:</p>

	<pre><?= var_dump($_GET)?></pre>



</body>
</html>