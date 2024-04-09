<?php 

if ($codigo = $_FILES['fichero']['error']) // Controla errores
    throw new Exception ("ERROR con código $codigo");

    
    if($_FILES['fichero']['size'] > 1240000) # Controla el tamaño
        throw new Exception('El fichero supera el tamaño permitido.');
    
        
        $nombre = $_FILES ['fichero']['name']; # Nombre del fichero original
        $rutaTemporal = $_FILES ['fichero'] ['tmp_name']; # Ruta del fichero temporal
        
        
        # Recuperar el tipo MIME del fichero con fileInfo
        $tipoMime = (new finfo(FILEINFO_MIME_TYPE))->file($rutaTemporal);
        
        if(!preg_match("/^image/", $tipoMime)) # Comprobar que sea de imagen
            throw new Exception('El fichero no es de imagen.');
        
            $rutaFinal = "imagenes/$nombre";    # Calcular la ruta final
            
        # Mover fichero de la ruta temporal a la ruta final.
        
            if(!move_uploaded_file($rutaTemporal, $rutaFinal))
                    throw new Exception("Error al mover el fichero $nombre.");
            
            echo "<p> El fichero $nombre se subió correctamente a $rutaFinal </p>";
    
    
    ?>
