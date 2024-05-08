<?php
# Recupera el libro a partir del ID .
# Si no llega el ID o si no encuentra el libro, lanza un excepción.

$libro = Libro::findOrFail(intval($_GET['id']), 'No se encontró el libro');


# Carga el formulario de edición 
require '../views/libro/actualizar.php';