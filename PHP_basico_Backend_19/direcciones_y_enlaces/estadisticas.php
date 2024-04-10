<?php   
    
    $ruta = "datos/usuarios.dat";
    
    echo "<h2> Último acceso </h2>";
    echo date ('d/m/Y h:i:s', fileatime($ruta)). "<br>";
    
    echo "<h2> Última modificación </h2>";
    echo date('d/m/Y h:i:s', filemtime($ruta)). "<br>";
    
    echo "<h2> Propietario, grupo, permisos (Linux)</h2>";
    
    echo fileowner($ruta)."<br>";
    echo filegroup($ruta)."<br>";
    echo fileperms($ruta)."<br>";
    
    echo "<h2>Tamaño y tipo</h2>";
    echo filesize($ruta). " bytes<br>";
    echo filetype($ruta). "<br>";
    
    
    ?>
