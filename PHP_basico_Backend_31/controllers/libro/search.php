<?php
# Toma los valores que llegan del formulario de búsqueda
# Se indican valores por defecto (que funcionen) por si no llegan.

$campo = $_POST['campo'] ?? 'titulo';
$valor = $_POST['valor'] ?? '';
$orden  = $_POST['orden'] ?? 'id';
$sentido  = $_POST['sentido'] ?? 'ASC';


# Recupera los libro aplicando el filtro
$libros = Libro::getFiltered($campo,$valor,$orden,$sentido);


# Carga la vista con el listado libros
# Es la misma que para la operación listar.
require '../views/libro/lista.php';