<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Parámetros de tipo objeto PHP</title>
</head>
<body>
	<h1>Paso por valor y por referencia, no hay que colocar el &.</h1>

	<p>Los objetos siempre se pasan por referencia, no hay necesidad de
		colocar el &</p>
    <?php

    function referencia(object $objeto)
    {
        $objeto->numero = 200;
    }

    # Prueba

    $test = new stdClass();
    $test->numero = 100;

    referencia($test);
    var_dump($test);
    ?>


</body>
</html>