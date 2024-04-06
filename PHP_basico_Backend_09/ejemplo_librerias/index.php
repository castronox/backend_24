<?php require_once 'librerias/phisics.php'?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos en PHP</title>
</head>
<body>

	<h2>Usando la librería</h2>

    	<p>Tras cargar la librería, ya podemos usar las funciones.</p>
    
    
    	<p>Velocidad de caída tras 10 segundos (Sin rozamiento):
    		<?= velocidadMRUA(-9.8, 10) ?> m/s
    	</p>
    	
    
    	<p>Pòsición de un tren que pasa por la estación a 10 m/s tras 20 s:
    		<?= posicionMRU(10, 20)  ?>m
    	</p>


</body>
</html>