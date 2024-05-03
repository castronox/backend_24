<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>

<h2>Recupera entidades aplicando un filtro simple</h2>
<p>Los parámetros que recibe son: campo, valor, orden, sentido. Són todos opcionales pero lo normal es indicar al menos campo y valor.

<p>Recuperamoa los libros de la editorial Planeta, ordenados por titulo ascendente.</p>
<ul>

<?php 

$libros= Libro::getFiltered('editorial','Planeta','titulo','ASC');

foreach ($libros as $libro)
    echo "<li>$libro</li>"; # Muestra los libros
?>

</ul>