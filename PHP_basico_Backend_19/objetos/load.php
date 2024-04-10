<?php   
    require 'SaveGame.php';
    
    $fichero = fopen('saves/savegame1.dat', 'r');
    $partida='';
    
    # Lee el fichero en bloques de 256 bytes
    while ($buffer = fread ( $fichero,256))
        $partida .= $buffer;
    
    fclose($fichero); # Cierra el fichero
    
    $partida = unserialize($partida);
    
    echo "Partida recuperada: $partida<br>";
    echo "<h2>Comprobación </h2>";
    echo "<pre>";
    var_dump($partida);
    echo "</pre>";
    
    
    
    
    ?>
