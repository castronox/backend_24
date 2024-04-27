<?php
$origen = 'imagenes/semiconductores.png';
$destino = 'imagenes/copia_semiconductores.png';

# Si el fichero existe y es legible ...
if (! is_readable($origen))
    throw new Exception("No se puede leer de $origen");

# Abre para lectura y escritura en modo binario
$handlerOrigen = fopen($origen, 'rb');
$handlerDestino = fopen($destino, 'wb');

# Lee el fichero en bloques de 256 bytes
while ($buffer = fread($handlerOrigen, 256))
    fwrite($handlerDestino, $buffer, 256);

fclose($handlerOrigen); # Cierra el fichero origen
fclose($handlerDestino); # Y el de destino.

echo "Fin de la copia";
?>
