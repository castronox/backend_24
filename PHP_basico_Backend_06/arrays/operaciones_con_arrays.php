<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Operaciones con arrays en PHP</title>
</head>
<body>
    
    <?php

    # -------------EJEMPLO-----------------------NOMBRE----------------------------RESULTADO-----------------------------------------------------------------
    #
    # ----- $INDICE1 + $INDICE2 ------------ Unión -------------- Unión de array A mas el array B -----------------------------------------
    #
    # ----- $INDICE1 == $INDICE2 ------------- Igualdad -------------- True sólo si tienen las mismas parejas de CLAVE | VALOR ------------------
    #
    # ----- $INDICE1 === $INDICE2 ------------- Identidad -------------- True si tienen las mismas parejas en el mismo orden CLAVE | VALOR --------
    #
    # ----- $INDICE1 <> $INDICE2 ------------- Desigualdad -------------- True si no es igual ------------------------------------------------------
    # ----- $INDICE1 != $INDICE2 ------------- Desigualdad -------------- True si no es igual ------------------------------------------------------
    #
    # ----- $INDICE1 !== $INDICE2 ------------- No-Identidad -------------- True si no són idénticos -------------------------------------------------
    $array1 = [

        'nombre' => 'Pepe',
        'profesion' => 'Soldador',
        'edad' => '35'
    ];

    $array2 = [

        'alias' => 'SuperLópez',
        'profesion' => 'López',
        'nacimiento' => '2000-01-01'
    ];

    echo "<pre>";

    # Si hay claves duplicadas, se mantiene a la izquierda (Profesión:Soldador)
    print_r($array1 + $array2);

    echo "</pre>";

    echo $array1 == $array2 ? 'Iguales' : 'Diferentes';
    echo "<br>";

    echo $array1 != $array1 ? 'Diferentes' : 'Iguales';
    echo "<br>";

    ?>


</body>
</html>