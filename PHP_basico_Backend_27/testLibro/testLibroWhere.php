<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>

<h2>Recupera las entidades aplicando una lista de condiciones</h2>

<p>Usamos el método estático <code>where()</code>.</p>
<p>Recibe un array asociativo con los pares de campo/valor.</p>
<p>Libros de Date que tenga en el titulo la palabra SQL.</p>

<ul>
<?php

    $libros = Libro::where([        
        'autor'     => 'Date',
        'titulo'    => 'SQL'
    ]);

    foreach($libros as $libro)
        echo "<li>$libro</li>";

?>
</ul>

