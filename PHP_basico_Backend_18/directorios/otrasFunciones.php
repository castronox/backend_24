<?php
echo "<pre>";

echo getcwd() . '<br>'; # Directorio actual
var_dump(scandir(".")); # Lista de ficheros

echo '<br>';

# Entra en el directorio imagenes ( Debe existir )
chdir("galeria/imagenes");

echo getcwd() . '<br>'; # Directorio actual
var_dump(scandir(".")); # Lista de ficheros

echo "<pre>";

?>
