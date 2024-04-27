<?php
$fichero = 'textos/texto_1_copia_2.txt';

# Si el fichero existe y es legible ...
if (! is_readable($fichero))
    throw new Exception("No se puede leer de $fichero");

$handler = fopen($fichero, 'r'); # Abre para lectura

$buffer = '';

# Lee el fichero en boques de 256 bytes
while ($texto = fread($handler, 256))
    $buffer .= $texto;

fclose($handler); # Cierra el fichero

echo $buffer; # Imprime el texto recuperado.
?>
