<?php
include '../config/config.php';
include '../autoload.php';

echo "<h2>Recuperando los temas</h2>";
echo "<pre>";
var_dump(DB::selectAll("SELECT * FROM TEMAS"));
echo "</pre>";

echo "<h2>Recuperando los libros de stephen King (No hay)...</h2>";
echo "<pre>";
var_dump(DB::selectAll("SELECT * FROM libros WHERE autor='Stephen King'"));
echo "</pre>";