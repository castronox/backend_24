<?php
include '../config/config.php';
include '../autoload.php';

// Pruebas de select

echo "Recuperando  el socio 5...</h2>";

echo "<pre>";
var_dump(DB::select("SELECT * FROM socios WHERE id=5"));
echo "</pre>";

echo "Recuperando  el socio 5000...(No existe)</h2>";

echo "<pre>";
var_dump(DB::select("SELECT * FROM socios WHERE id=5000"));
echo "</pre>";
