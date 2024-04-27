<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio 4 PHP</title>
</head>
<body>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $radio = $_POST['radio'];
        $pi = pi();

        $resultado_d = '';
        $resultado_p = '';
        $resultado_a = '';

        if (! empty($_POST['radio'])) {

            $resultado_d = $radio * 2;
            $resultado_p = 2 * $pi * $radio;
            $resultado_a = $pi * $radio * 2;
        }
    }
    ?>
<h1>Calcular el área el diámetro y el perímetro de un circulo.</h1>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

		<label for="radio">Introduce el radio del circulo</label> <input
			type="number" id="radio" name="radio" value="<?php echo $radio; ?>" />
		<input type="submit" name="calcular" value="calcular">

	</form>
<?php

if (isset($_POST['radio'])) {

    if ($resultado_a || $resultado_d || $resultado_p !== '') {
        echo "El resultado del diámetro es: $resultado_d <br>";
        echo "El resultado del área es: $resultado_a <br>";
        echo "El resultado del perímetro es: $resultado_p <br>";
    } else {
        echo "<p>Escribe un radio a calcular.";
    }
}

?>

</body>
</html>