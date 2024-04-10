<?php   
    

# Solicitamos la URL
$texto = file_get_contents('https://biblioteca.robertsallent.com');

if (!$texto)
    throw new Exception("No se pudo leer");

    # Escribo lo recuperado en un fichero
    # Abre escribe y cierra en un solo paso
    
    $done = file_put_contents('copia.txt', $texto);
    
    if($done === false)
        throw new Exception("Nose pudo escribir");
    
        echo "Escritura del fichero finalizada, ";
        echo "se escribieron $done bytes.";
    
    ?>
