<?php
include '../config/config.php';
include '../autoload.php';

echo "<h2> Si realizamos un SELECT erróneo...</h2>";
echo "<p>Si estamos en DEBUG, debe mostrar que no existe la tabla members.</p>";
echo "<p>Si no estamos en DEBUG, mostrará 'error en la consulta'</p>";

DB::select("SELECT * FROM members WHERE id = 5");

