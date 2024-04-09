<?php   
    # Lee el archivo y lo vuelca en un array
    $array = file('textos/texto_1_copia_3.txt');
    
    
    echo "<h2> Lo que recupera file()</h2>";
    
    echo "<pre>";
    var_dump($array);
    echo "</prre>";
    
    echo "<h2> Todo junto </h2>";
    
    echo implode('<br>', $array);
    ?>
