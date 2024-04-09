<?php   

$directorio = "imagenes";

$archivos = []; # Array donde guardaremos los nombres.


$handler = opendir($directorio); # Abre el directorio


# Mientras haya entrada en el directorio...

while ($file = readdir($handler)){
    
    $archivos[] = $file;  # Mete el nombre del fichero en el array
}

closedir($handler);  # Cierra el directorio
sort($archivos);     # Ordena el array

# Lista los ficheros que hemos encontrado.
foreach($archivos as $archivo)
    echo  "<p>$directorio/$archivo</p>";
    
?>
