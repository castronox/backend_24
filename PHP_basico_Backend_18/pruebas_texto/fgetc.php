<?php   

$fichero = 'textos/texto_1.txt';

# Si el fichero no es legible ...

if (!is_readable($fichero))
        throw new Exception("El fichero no se pudo leer");

$fichero = fopen($fichero,'r'); # Abre para la lectura

# Lee el fichero carácter a carácter
while ($character = fgetc($fichero))
    echo $character;

    fclose($fichero); # Cierra el fichero.
    
    
?>
