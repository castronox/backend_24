<?php
require_once '../config/config.php';
require_once '../autoload.php';

#   Borrar un libro 
echo "<h2> Borrando el libro 17</h2>";

#Borra el libro, si falla lanzara una excepción.
$numeroFilasBorradas = Libro::delete(17);

# Forma alternativa ,usando el método de objeto
# $numeroFilasBorradas = Libro::find(17)->deleteObject();

echo "<p>Borrado correcto de $numeroFilasBorradas registros.</p>";

# Intento recuperar el libro de la BBDD para comprobar que ya no está.
echo Libro::find(17) ?? "<p>Libro inexistente.</p>";

