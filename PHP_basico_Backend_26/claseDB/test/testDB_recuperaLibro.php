<?php
require_once '../config/config.php';
require_once '../autoload.php';


#Recuperar libro que existe.

echo "<h2>Recuperando un libro existente</h2>";

$libro = Libro::find(3);        # El método find() recupera un objeto o libro (o null).

echo "<p>" . ($libro ?? "Libro inexistente"). "</p>";



# Recuperar un libro que no existe
echo "<h2> Recuperando el libro 1000...</h2>";

$libro = Libro::find(1000);
echo "<p>".($libro ?? "Libro inexistente")."</p>";

