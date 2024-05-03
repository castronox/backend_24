<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>
<h2> Calculo de totales</h2>
<p>Usamos el método estatico <code>total()</code>.</p>


<?php 
echo "<p>Total de libros: " . Libro::total() . "</p>";
echo "<p>MIN Edición: " . Libro::total('MIN','edicion') . "</p>";
echo "<p>MAX Edición: " . Libro::total('MAX','edicion') . "</p>";
echo "<p>AVG Edición: " . Libro::total('AVG','edicion') . "</p>";
?>