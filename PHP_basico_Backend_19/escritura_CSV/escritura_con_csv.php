
<?php
$coches = [

    [
        'Seat',
        'Ibiza',
        '11000'
    ],
    [
        'Ford',
        'Raptor',
        '76000'
    ],
    [
        'Cupra',
        'Formentor',
        '19350'
    ]
];

# Abre el fichero para su escritura
$fichero = fopen('datos/coches.csv', 'w');

# Vuelca el array al fichero CSV
foreach ($coches as $coche)
    fputcsv($fichero, $coche);

fclose($fichero); # Cierra el fichero.

echo "Volcado de datos realizado.";

?>
