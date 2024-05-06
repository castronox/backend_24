<?php
# Adjunta una nueva cookie

setcookie('tipus', ' Certifica de professionalitat', time()+300);

# Name , value, expires, path, domain, secure, httponly

setcookie('servei','SOC', time()+300, '/', '', false,true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>HTTPONLY</title>
	
</head>
<body>
<h2>Recuperando una cookie que no es accesible desde JS</h2>
<h1>Recuperando cookies...</h1>

<script>
	document.write(document.cookie);
</script>
</body>
</html>