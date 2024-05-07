<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Comprar producto</title>
	
</head>
<body>
<script src="carrito.js"></script>

<h1>Tienda ONLINE</h1>
<h3>Añade productos al carrito.</h3>
<p>Hay <output id="total">0</output> productos.</p>



<button onclick = "anadir('Tomates')">Tomates.</button>
<button onclick = "anadir('Limones')">Limones.</button>
<button onclick = "anadir('Aberronchos')">Aberronchos.</button>

<p>Puedes vaciar el carro si te equivocas.</p>
<button onclick="vaciar()">Vaciar carrito</button>

<p>Luego pulsa "finalizar compra".</p>

<form method="POST" action = "finalizar.php">
	<input type = "hidden" name="compra" id="compra">
	<button onclick="finalizar()">Finalizar Compra</button>

</form>

</body>
</html>
