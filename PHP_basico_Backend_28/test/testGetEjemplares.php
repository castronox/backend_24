<h1>Recuperando entidades relacionadas de 1 a N</h1>


<?php
require_once '../config/config.php';
require_once '../autoload.php';
?>

<h2>Recuperando el libro 3</h2>


<?php 
$libro = Libro::findOrFail(3);
echo "<p>$libro</p>";
?>

<h2>Recuperando ejemplares del libro 3</h2>

<ul>
<?php 
    
    $ejemplares = $libro->getEjemplares();
    
    foreach($ejemplares as $ejemplar)
        
        echo "<li>$ejemplar</li>";

?>
</ul>