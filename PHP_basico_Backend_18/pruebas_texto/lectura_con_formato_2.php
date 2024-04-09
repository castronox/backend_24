<?php   
    # Abre el fichero para lectura
    
$fichero = fopen('textos/usuarios.dat', 'r');

# Preparamos la consulta

$consulta = " INSERT INTO usuarios(nombre, edad, telefono) VALUES ";

# Va concatenando los valores que recupera del fichero

while ($array = fscanf($fichero, '%s %d %s\n'))
    $consulta .="('".$array[0]."', ".$array[1].", '".$array[2]."'),";

    fclose($fichero); # Cierra el fichero
    
    $consulta= rtrim($consulta, ','); # Muestra la consulta
    echo $consulta;
    ?>
