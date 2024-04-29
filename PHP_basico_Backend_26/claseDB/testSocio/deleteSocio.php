<?php
include '../config/config.php';
include '../autoload.php';



echo "<h2>Borrando un socio </h2>";

$socio = Socio::find(3);  # El método recupera el objeto o socio (o NULL en caso de inexistencia)

echo "<p>" . ($socio ?? "Socio inexistente") . "</p>";

$socio = Socio::delete(3);

echo "<p>" . ($socio ?? "Socio inexistente") . "</p>";