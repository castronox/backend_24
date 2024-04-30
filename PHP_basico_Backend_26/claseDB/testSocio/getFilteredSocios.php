<?php

include_once '../config/config.php';
include_once '../autoload.php';



echo "<h2>Probando filtros con el modelo para socios.</h2>";

$ocio = Socio::getFiltered('provincia', 'barcelona', 'nombre', 'ASC');

    echo "<ul>";

        foreach ($ocio as $socio)    
            echo "<li>$socio->nombre pertenece a:<b>$socio->provincia</b></li>";  
    
    echo "</ul>";