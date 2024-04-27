<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Desplegable dinámico en PHP</title>
</head>
<body>
    
    <?php
    // Lista de coches, simula una BBDD
    $coches = [
        'Seat',
        'Audi',
        'Mercedes',
        'Subaru',
        'Kia'
    ];
    ?>
    
    <h1>Rellenando un desplegable</h1>
	<p>Este ejemplo está simplificado, más adelante lo haremos con una
		lista de objetos del tipo adecuado</p>


	<form mthos="post">

		<label>Vehiculo:</label> <select name="vehiculo">
	
	<?php

foreach ($coches as $coche)
    echo "<option value='$coche'>$coche</option> \n";
?>			
	</select> <input type="submit" name="guardar" value="guardar" />
	</form>


</body>
</html>