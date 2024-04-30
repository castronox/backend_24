<?php

include_once '../config/config.php';
include_once '../autoload.php';

echo "<h2> Recuperano libros de Jurguen ...</h2>";

$libros = Libro::getFiltered('autor', 'Jurgen');

    echo "<ul>";
    
        foreach ($libros as $libro)
            
            echo "<li>$libro</li>";
        
    echo "</ul>";
    
    
echo "<h2>Recuperando libros con GRAW en la editorial.</h2>";  

echo "<p> Ordenados por titulo DESC </p>";


$libros = Libro::getFiltered('editorial', 'Graw', 'titulo', 'DESC');

       echo "<ul>";
        
        foreach ($libros as $libro)
            
            echo "<li>$libro->titulo de <b>$libro->editorial</b></li>";
            
       echo "</ul>";