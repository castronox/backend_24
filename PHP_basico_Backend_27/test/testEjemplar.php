<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>


<h2>Probando con ejemplares</h2>

<?php

echo "<h2>Recuperando todos los ejemplares... </h2>";
$ejemplares = Ejemplar::all(); # Recupera todos los ejemplares

# Muestra una lista en html con los datos.

echo "<ul>";
foreach($ejemplares as $ejemplar)
    echo "<li>$ejemplar</li>";
echo "</ul>";


# Hacer ejercicios

?>

