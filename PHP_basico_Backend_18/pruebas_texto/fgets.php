<?php
$fichero = 'textos/texto_1_copia.txt';

# Si el fichero no es legible ...
if (! is_readable($fichero))
    throw new Exception("El fichero no se pudo leer");

$fichero = fopen($fichero, 'r'); # Abre para lectura.

# Lee el fichero línea a línea

while ($linea = fgets($fichero))
    echo "$linea<br>";

?>
