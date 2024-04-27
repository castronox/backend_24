<?php
require_once '../config/config.php';
require_once '../autoload.php';


#Actualizar un libro 
echo "<h2> Actualizando el libro 10 ... </h2>";

$libro = Libro::find(10);
echo "<p>$libro</p>";


# Cambiamos algunos datos 
$libro->isbn    = '100-101010-001-0101';
$libro->titulo  = 'To kill a Mockingbird';
$libro->autor   = 'Harper Lee';

# Actualizamos, en caso de fallo lanzaría una excepción 

$numeroFilasActualizadas = $libro->update();
echo "<p>Actualización correcta de $numeroFilasActualizadas registros.</p>";

# Recuperamos de nuevo el libro  y lo imprimimos para comprobar los cambios

echo Libro::find(10); 
