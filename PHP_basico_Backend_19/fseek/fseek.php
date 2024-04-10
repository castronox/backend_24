<?php   
    $fichero = fopen('textos/fabula.txt' , 'r');
    
    # Colocal el apuntador en la pos 10 desde el inicio
    fseek($fichero, 10 , SEEK_SET);
    
    echo fgets($fichero); # Lee el resto de la línea
    
    # Coloca el apuntador 15  pos hacia atrás
    fseek($fichero, -15, SEEK_CUR);
    
    echo fgets($fichero).'<br>';
    
    fclose($fichero); # Cierra el fichero
    ?>
