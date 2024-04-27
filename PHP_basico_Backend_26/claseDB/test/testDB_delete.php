<?php
include '../config/config.php';
include '../autoload.php';


echo "<h2>Borrando un tema </h2>";

$filas = DB::delete("DELETE FROM temas WHERE id=5");
echo "<p>Filas afectadas $filas</p>";


# Comprobación de que se ha borrado correctamente
echo "<pre>";
var_dump(DB::select("SELECT * FROM temas WHERE id=5"));
echo "</pre>";




