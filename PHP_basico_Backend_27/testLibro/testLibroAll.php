<?php

require_once '../config/config.php';
require_once '../autoload.php';
# Cargamos fichero de configuración
# Cargamos el Autoload
?>

<h1>Probando los métodos de Model</h1>



<h2> Recuperando todos los libros...</h2>

<p>Usamos el método estático <code>all()</code>.</p>

<p>Este método puede recibir opcionalmente LIMIT y OFFSET por parámetro</p>


<ul>
<?php 

$libros = Libro::all();         # Recupera todos los libros

foreach($libros as $libro)
    echo "<li>$libro</li>";     # Muestra los libros
    
    
?>
</ul>