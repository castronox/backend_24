<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>

<h2>Actualiza un libro </h2>
<p>Usamos el método de objeto <code>update()</code>.</p>

<p>Se aplica sobre el tipo Libro que queremos actualizar en la BBDD</p>


<?php

# Cambiamos algunos datos del libro creado anteriormente.

$libro->titulo = 'To a Kill a MockingBird';
$libro->autor  = 'Harper Lee';

#Actualizamos
$filasAfectadas = $libro->update();

echo "<p>Actualización correcta de $filasAfectadas registros.</p>";

# Recuperamos de nuevo el libro de la BBDD para comprobar los cambios.
echo Libro::find($libro->id);
?>
