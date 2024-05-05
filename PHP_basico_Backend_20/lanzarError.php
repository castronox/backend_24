<?php

# Función que imprime el contenido de un fichero .



function imprimir (string $fichero){
   
    
    if (!$fichero = @fopen($fichero, 'r'))
        throw new Error ('No se pudo leer el fichero.');
    
    while ($c = fgetc($fichero))    # Lee el fichero
        echo $c;                    # Im prime caracter a caracter.
    
        fclose($fichero);
}

# PRUEBA 

try{
    
    imprimir ('fichero.txt');     # Este fichero existe.
    imprimir ('patata.txt');      # Este fichero no existe.
    
}catch(Error $e){
    echo "<p>" .$e->getMessage(). "</p>";
}