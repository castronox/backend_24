<?php   
    
require_once 'exceptions/UploadException.php';
require_once 'libraries/Upload.php';

            # Intenta ejecutar el código            
            try{
                
            # Sube el fichero, hace las comprobaciones y retorna la ruta.                
            $ruta = Upload::save(
                'fichero',      # Clave de $_FILES (nombre del input)
                'imagenes',      # Carpeta del destino
                true,           # Generar nombre único
                1048576,        # Tamaño máximo
                'image/*',      # Tipo MIME ( * es el comodín)
                'img_',         # Prefijo para el nombre generado
                true            # Retornar ruta completa?
                );
            
                    echo "<p>Éxito en la operación, fichero subido a $ruta</p>";
                    
            # Si se produce alguna excepción...        
            }catch (UploadException $e){
                echo "<p>Error: " . $e->getMessage(). "</p>"; # Mostramos el error.
            }
    ?>
