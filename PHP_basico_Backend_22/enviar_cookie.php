<?php

# Adjunta una nueva COOKIE a la respuesta
# Esta  COOKIE caduca en 5 minutos.
setcookie('curso', 'Aplicaciones_WEB', time()+300);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Enviando una COOKIE</title>
	
</head>
<body>
<h2>COOKIE 'curso' enviada !</h2>
</body>
</html>