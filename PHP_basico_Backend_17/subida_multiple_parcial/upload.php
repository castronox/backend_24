<?php   
    
    require_once 'exceptions/UploadException.php';
    require_once 'libraries/Upload.php';
    
    # Para cada clave en $_FILES (para cada fichero subido)
    
    foreach($_FILES as $clave=>$valor){
        
        # Intenta ejecutar el código
        
        try{
            $nombre = $_FILES[$clave]['name'];
            
            $ruta = Upload::save($clave, 'imagenes', true, 1048576, 'image/*');
            echo "<p>Fichero $nombre subido a $ruta correctamente.</p>";
            
        #Si falla el fichero actual    
        }catch (UploadException $e){
            echo "<p>ERROR en $nombre: " . $e->getMessage() . "</p>";
        }
        
        # Si falla un ficheo muestra el error, luego intentará el siguiente.
    }
?>
