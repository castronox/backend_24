<?php
include_once '../config/config.php';
include_once '../autoload.php';
?>

<h2>¿ Tienen ejemplares los libros 15 o 16 ?</h2>

<p><?= Libro::findOrFail(15)->hasAny('Ejemplar')? 'SI':'NO' ?></p>
<p><?= Libro::findOrFail(16)->hasAny('Ejemplar')? 'SI':'NO'  ?></p>

<h2> ¿ Tienen préstamos los socios de sabadell ?</h2>

<ul>
<?php 

$socios = Socio::where(['poblacion' => 'Sabadell' ]);

foreach ($socios as $socio)
    echo "<li>$socio->nombre - tiene prestamos ? : " . ($socio->hasAny('Prestamo')? 'SI' : 'NO'). "</li>";
?>
</ul>
