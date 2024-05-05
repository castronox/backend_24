<?php

# Adjunta una nueva cookie
setcookie('Alumno', 'Cristian', time()+300);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>De PHP a JS</title>
	
</head>
<body>
<h2>Recuperando la cookie</h2>

<script>document.write(document.cookie);</script>
</body>
</html>