
    <?php   
    
    
    #Si se produjo error -->
    
    if ($codigo = $_FILES['fichero']['error'])
        throw new Exception ('ERROR, código -->' . $codigo);
   
    # Recupera la ruta que se le asigna al fichero en la carpeta temporal
    
        $rutaTemporal = $_FILES['fichero']['tmp_name'];
        
    # Recupera el nombre original del fichero
    
        $nombreFichero = $_FILES ['fichero'] ['name'];
        
    # E sta será la ruta final donde ubicaremos el archivo, debe ser accesible
    
        $rutaFinal = "imagenes/$nombreFichero";
        
    # Mueve el fichero de la ruta tempora a la ruta final
            
        if ( !move_uploaded_file($rutaTemporal, $rutaFinal))
            throw new Exception('Error al mover el fichero');
            
        
            
        echo "El fichero se movió correctamente";
        
    
    
    ?>
