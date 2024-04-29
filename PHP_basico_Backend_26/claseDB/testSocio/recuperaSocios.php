<?php
require_once '../config/config.php';
require_once '../autoload.php';



# Recuperamos los socios 

echo "<h2> Recuperamos socios de la biblioteca </h2>";
$socios = Socio::all();


echo "<ul>";

foreach ($socios as $socio)
    
    echo "<li>$socio</li>";  # Utilizará el __toString()

echo "</ul>";