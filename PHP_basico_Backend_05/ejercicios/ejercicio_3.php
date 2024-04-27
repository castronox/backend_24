<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio3 PHP</title>
</head>
<body>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $decimales = 2;

        $resultado = '';

        if (! empty($_POST['base'] and $_POST['altura'])) {

            $resultado = $base * $altura / 2;
        }
    }

    ?>
    
    <h1>Área de un triangulo rectangulo.</h1>

	<form method="post" action=" <?php echo $_SERVER['PHP_SELF'];?>">

		<label for="base">Introduce la base del triángulo rectángulo:</label>
		<input type="number" id="base" name="base"
			value="<?php echo $base; ?>" /> <label for="altura">Introduce la
			altura del triángulo rectángulo:</label> <input type="number"
			id="altura" name="altura" value="<?php echo $altura; ?>" /> <input
			type="submit" name="calcular" value="calcular">
	</form>
    
    <?php
    if (isset($_POST['base']) and isset($_POST['altura'])) {

        if (! empty($base and $altura)) {
            echo "<p> El resultado de el área es: " . round($resultado, $decimales) . "</p>";
        } else {
            echo "<p> Escribe datos para calcular porfavor</p>";
        }
    }

    ?>


</body>
</html>

