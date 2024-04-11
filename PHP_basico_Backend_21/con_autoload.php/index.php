<?php   
    
include 'config/config.php';
include 'libraries/autoload.php';

# A partir de este punto no harán falta mas includes o requires

# Crea una Moto
$moto = new Moto('honda', 'x2');

echo "<p>Se ha creado $moto</p>";

$moto->arrancar();

# Crea un coche
$coche = new Coche('toyota','prius');
echo "<p>Se ha creado $coche.</p>";

$coche->arrancar();
    
?>

