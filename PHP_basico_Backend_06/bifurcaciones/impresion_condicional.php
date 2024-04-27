<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Impresión condicional PHP</title>
</head>
<body>
    
    <?php
    $nombre = NULL;

    ?>
	<h1>Impresión condicional</h1>

	<p>En las vistas, trataremos de poner el menor número de código PHP
		posible.</p>
	<p>En este sentido, la impresión condicional con los operadores ?: o ??
		resulta muy útil</p>

	<p>Hola <?= $nombre ?? 'Invitado' ?></p>





</body>
</html>