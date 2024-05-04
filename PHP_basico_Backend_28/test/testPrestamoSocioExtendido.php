
<?php 
include_once '../config/config.php';
include_once '../autoload.php';
?>

<h2> Recuperando prestamos ampliados del socio 5...</h2>
<ul>
<?php
$prestamosAmpliados = Socio::findOrFail(5)->hasMany('V_prestamo');

foreach ($prestamosAmpliados as $prestamo)
    echo "<li>$prestamo.</li>";
?>
</ul>
<h2>Recuperando prestamos no devueltos</h2>

<ul>
<?php 
$prestamosAmpliados = V_prestamo::isNull('devolucion');

    foreach($prestamosAmpliados as $prestamo)
        echo "<li>$prestamo.</li>";
?>
</ul>