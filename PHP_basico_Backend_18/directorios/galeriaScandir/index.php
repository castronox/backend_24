<?php

# Recupera la lista de ficheros del direc torio y los retorna directamente como array

$archivos = scandir("imagenes");


# Quita el . y el ..
array_splice($archivos, array_search(".", $archivos), 1);
array_splice($archivos, array_search("..", $archivos), 1);


sort($archivos); # Ordena el array

# Crea tantas <img> como archivo haya en el directorio

foreach ($archivos as $foto)
    echo "<img height='150' src='imagenes/$foto'>";
    
    ?>