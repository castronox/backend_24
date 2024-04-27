<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear un Punto en PHP</title>
</head>
<body>

	<h2>Creando un punto</h2>

	<p>Como no hemos definido un constructor, se usará el constructor</p>
    
    <?php

    # Incluiremos el fichero que contiene la clase Punto
    require_once 'Punto.php';

    $punto1 = new Punto(); # Crea un nuevo punto.
    echo $punto1 . '<br>'; # Imprime el punto (0,0)

    ?>
    <br>
	<br>
	<br>
	<br>
    <?php

    require_once 'Punto.php';

    $punto1 = new Punto();
    echo $punto1 . '<br>';

    $punto1->x = 100;
    $punto1->y += 50;

    echo "La coordenada X es: $punto1->x <br>";
    echo "La coordenada Y es: $punto1->y <br>";
    echo "El punto 1 se encuentra en $punto1.";

    ?>


</body>
</html>