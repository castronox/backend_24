<?php
$directorio = 'cuentos';
# Recupera los ficheros del directorio
$archivos = scandir($directorio);
$cuentos = [];

# Mete el array en los cuentos de fichero .txt

foreach ($archivos as $a)
    if (preg_match('/\.txt$/i', $a))
        $cuentos[] = $a;

# Ordena los fichero txt alfabéticamente
sort($cuentos);

?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>App para guardar y recuperar cuentos PHP</title>
</head>
<body>


	<h1>Lectura de cuentos</h1>

	<form method="post">

		<label>Selecciona el cuento:</label> <select name="cuento">
	<?php

foreach ($cuentos as $c)
    echo "<option value='$c'>$c</option>";
?>
</select> <input type="submit" value="Ver">
	</form>


	<h2>Cuento</h2>
<?php
if (! empty($_POST['cuento'])) {

    $fichero = $_POST['cuento'];

    echo "<h2>$fichero</h2>";
    echo "<p>" . file_get_contents("$directorio/$fichero") . "</p>";
}
?>

</body>
</html>



