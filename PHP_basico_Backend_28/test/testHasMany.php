
<?php 
require_once '../config/config.php';
require_once '../autoload.php';
?>

<h2>Recuperando el libro 3....</h2>

<?php
$libro = Libro::findOrFail(3);
echo "<p>$libro</p>";

?>

<h2>Ejemplares del libro 3</h2>

<p>La relación va de libros.id a ejemplares.idlibro, así que no hace falta indicar los dos parámetros adicionales.</p>

<ul>
<?php 
$ejemplares = $libro->hasMany('Ejemplar');
# EQUIVALE a : $ejemplares = $libro->hasMany('Ejemplar', 'idLibro','id');

foreach ($ejemplares as $ejemplar)
    echo "<li>$ejemplar</li>";
?>
</ul>