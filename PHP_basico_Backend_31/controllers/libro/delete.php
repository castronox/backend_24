<?php
# Recupera el ID
$id = intval ($_GET['id']);


# Recupera el libro a partir del ID.

$libro = Libro::findOrFail($id, 'No se encontró el libro.');

# Carga la vista con el formulario de confirmación de borrado 

require '../views/libro/borrar.php';

