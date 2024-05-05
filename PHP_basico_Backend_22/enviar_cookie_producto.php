<?php

include 'Producto.php';

$objetos = [];
$objetos[] = new Producto ('Café' , 2.75);
$objetos[] = new Producto ('Galletas', 2);
$objetos[] = new Producto ('Leche' , 0,95);

# Adjunta la cookie
setcookie ('carro' , serialize ($objetos), time()+300);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Enviando una COOKIE</title>
	
</head>
<body>
<h2>COOKIE "Carro" enviada !</h2>
</body>
</html>