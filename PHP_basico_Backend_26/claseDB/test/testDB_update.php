<?php

include '../config/config.php';
include '../autoload.php';
# Prueba de update

echo "<h2>Actualizando un tema...</h2>";

$consulta = "UPDATE temas SET tema='Test de tema' WHERE id=10";
$filas = DB::update($consulta);

echo "<p>Filas afectadas: $filas</p>";

#Comprobacion de que se ha actualizado correctamente
echo "<pre>";
var_dump(DB::select("SELECT * FROM temas WHERE id = 10"));
echo "</pre>";

