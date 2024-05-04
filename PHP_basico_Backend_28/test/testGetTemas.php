
<h1>Recuperando entidades relacionadas N a N</h1>
<?php
    require_once '../config/config.php';
    require_once '../autoload.php';

?>

<h2>Recuperando el libro 10 ...</h2>

<?php 
    $libro = Libro::findOrFail(10);
    echo "<p>$libro</p>";
?>

<h2>Recuperando temas del libro 10...</h2>

<ul>
<?php 
    $temas = $libro->getTemas();
    
    foreach ($temas as $t)
        echo "<li>$t.</li>";
?>
</ul>