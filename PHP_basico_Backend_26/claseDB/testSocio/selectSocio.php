<?php
require_once '../config/config.php';
require_once '../autoload.php';


# Recuperamos el socio especifico con el método find();

$socio = Socio::find(3);  # El método recupera el objeto o socio (o NULL en caso de inexistencia)

echo "<p>" . ($socio ?? "Socio inexistente") . "</p>";

# Recuperar un libro que no existe

echo "<h2> Recuperando el socio 1000 </h2>";

$socio = Socio::find(1000);

echo "<p>".($socio ?? "Socio inexistente"). "</p>";

