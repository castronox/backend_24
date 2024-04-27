<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Operador de fusión NULL PHP</title>
</head>
<body>

	<h1>El operador de fusión NULL</h1>

	<p>El operador de coalescencia o fusión de NULL, retona el primer
		operando que existía y no sea NULL.</p>
    
    <?php
    $a = 'Patata';
    $b = 'Queso';
    $c = 'Lechuga';

    echo $a ?? $b ?? $c; // Patata (porque $a no es null)
    echo '<br>';

    $a = null; // pone $a a NULL
    unset($b); // desinstancia $b

    echo $a ?? $b ?? $c; // Lechuga (porque $a es null y $b no existe)
    ?>


</body>
</html>