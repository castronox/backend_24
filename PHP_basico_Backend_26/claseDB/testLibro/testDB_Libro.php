<?php
require_once '../config/config.php'; # Carga el fichero de configuración
require_once '../autoload.php'; # Carga el autoload

# Recuperar todos los libros

echo "<h2>Recuperado los libros...</h2>";
$libros = Libro::all(); # El método all() recupera todos los libros en un array

# Muestra una lista con los datos

echo "<ul>";
foreach ($libros as $libro)
    echo "<li>$libro</li>"; # Usará el __toString()
echo "</ul>";

