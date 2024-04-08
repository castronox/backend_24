<?php 

foreach ($_FILES as $fichero){                   # Para cada entrada de $_FILES
    
    
    if(!$error = $fichero['error']){            # Si no hay error
    
        $nombreFichero = $fichero['name'];      # Nombre del fichero
        $rutaTemporal = $fichero['tmp_name'];   # Ruta temporal
        $rutaFinal = "files/$nombreFichero";    # Ruta final
        
        # Mueve el fichero de la ruta temporal a la ruta final
        echo move_uploaded_file($rutaTemporal, $rutaFinal) ? 
        "<p> Fichero $nombreFichero movido correctamente. </p>" :
        "<p> Error al mover el fichero $nombreFichero";
        
        
        }else # Si hay error
        
            echo "<p> ERROR con código: $error . </p>";
}
?>