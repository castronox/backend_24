<?php
    require_once '../config/config.php';
    require_once '../autoload.php';
?>

<h2> Recuperando el ejemplar 18</h2>

<?php 
    $ejemplar = Ejemplar::findOrFail(18);
    echo "<p>$ejemplar</p>";
?>


<h2>Recuperando el libro del ejemplar 18</h2>

<?php 
$libro = $ejemplar->belongsTo('Libro');
echo "<p>$libro</p>";

?>

<h2>Recuperando el socio del prestamo 100</h2>
<?= Prestamo::findOrFail(100)->belongsTo('Socio')?>
