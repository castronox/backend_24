<?php
require_once '../config/config.php';
require_once '../autoload.php';


echo "<h2>Calculos de totales</h2>";

echo "<p>Total de libros: ". Libro::total()."</p>";

echo "<p>Min edicion: ".Libro::total('MIN', 'edicion')."</p>";
echo "<p>Max edicion: ".Libro::total('MAX', 'edicion')."</p>";
echo "<p>AVG edicion: ".Libro::total('AVG', 'edicion')."</p>";

