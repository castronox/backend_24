<?php
# Recupera la lista de libros mediante el modelo
$libros = Libro::all();
# Carga la vista que muestra el listado.
require '../views/libro/lista.php';