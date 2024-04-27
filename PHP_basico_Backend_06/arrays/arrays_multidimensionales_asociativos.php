<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Arrays Multidim. Asociativos en PHP</title>
</head>
<body>
    
    <?php

    # Arrays Multidimensionales asociativos.

    // Matriz 2d Indexada y Asociativa.
    // Para acceder a una posición: $coches[index]['clave'];
    $coches = [

        [
            'marca' => 'Seat',
            'modelo' => 'León'
        ],
        [
            'marca' => 'Ford',
            'modelo' => 'Focus'
        ],
        [
            'marca' => 'Peugeot',
            'modelo' => 'Partner'
        ]
    ];

    # Para recuperar un coche
    print_r($coches[1]); // Array Ford Focus

    # Para recuperar un valor en concreto
    echo '<p>' . $coches[2]['modelo'] . '</p>'; // 'Partner'

    # Para imprimir los datos del array multidimensional asociativo con foreach.

    foreach ($coches as $coche) {
        echo "<p>Coche</p>";

        foreach ($coche as $clave => $valor) {
            echo "$clave: $valor<br>";
        }
    }

    ?>


</body>
</html>