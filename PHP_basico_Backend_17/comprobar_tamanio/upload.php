<?php   
  

if ($codigo = $_FILES['fichero']['error'])
    throw new Exception("ERROR con código $codigo.");

    #Comprobamos que el tamaño no sea superior a 1,240,000 bytes...
    
    $tamanio = $_FILES ['fichero']['size'];
    
    if ($tamanio > 1240000)
        throw new Exception ('El tamaño supera el límite permitido');
    
        # Si todo ha ido bien
        
    echo "<p> El tamaño es $tamanio bytes, el fichero es correcto </p>";
    
?>
