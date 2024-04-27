<?php

# Crea una instancia de Directory
$directorio = dir("galeriaComprobacion/imagenes");

# Mientras haya entrada en el directorio...
while ($fichero = $directorio->read())
    echo "$fichero<br>"; # Muestra la entrada

# Cierra el directorio
$directorio->close();

# Fin
echo "Lista de $directorio->path completada!";

?>
