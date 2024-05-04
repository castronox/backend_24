
<h1>Recuperando entidades relacionadas de 1 aN</h1>
<?php
require_once '../config/config.php';
require_once '../autoload.php';

?>

<h2>recuperamos el socio 9</h2>

<?php 
$ocio = Socio::findOrFail(9);
echo "<p>$ocio</p>"
?>

<h2>Prestamos socio 9 </h2>

<ul>
<?php 
$prestamos = $ocio->getPrestamos();

foreach($prestamos as $prestamo)
    echo "<li>$prestamo</li>";
?>
</ul>