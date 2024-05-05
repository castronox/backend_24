<?php
# Adjunta una cookie caducada
setcookie('curso', '', time()-5000);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eliminando una COOKIE</title>
	
</head>
<body>
<h2>COOKIE 'curso' eliminada !</h2>
</body>
</html>