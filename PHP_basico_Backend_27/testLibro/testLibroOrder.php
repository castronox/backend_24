<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>

<h2>Recuperar y ordenar</h2>

<p>Los parámetros de este método son: campo, sentido, limit, offset.
   Todos son opcionales (por defecto id, ASC, 0, 0).</p>

<p>Recuperaremos los dos primeros libros ordenados por título ASC.</p> 


<ul>
<?php 


$libros = Libro::orderBy('titulo', 'ASC', 2);

foreach ($libros as $libro)
    echo "<li>$libro</li>";
?>
</ul>  
   


