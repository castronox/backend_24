<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bucles For y foreach PHP</title>
</head>
<body>
    
    <?php
    echo "<h2>Recorrer arrays</h2>";

    $lista = [
        10,
        20,
        30,
        40,
        50
    ]; // Lista de 5 elementos.

    echo "<p>De inicio a fin con un bucle FOR</p>";

    # Desde posición 0 a la última.
    for ($i = 0; $i < count($lista); $i ++) {
        # Imprime el VALOR de la posición.
        echo $lista[$i] . "<br>";
    }

    echo "<p>De inicio a fin con un bucle FOREACH</p>";

    foreach ($lista as $valor) {

        echo "$valor<br>";
    }

    # Hay que tener en cuenta que en el bucle foreach, la variable usada para almacenar valores hace paso por valor (hace una copia)
    # y no se sobreescriben los datos.
    # Las listas que referencian objetos, hacen paso por referencia, lo que acceden a la memoria original en cuestión.

    ?>
    


</body>
</html>