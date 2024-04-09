<?php 

# Abre el fichero para lectura

$fichero = fopen('textos/usuarios.dat','r');

# Prepara la consulta

$consulta = "INSERT INTO usuarios (nombre, edad, telefono) VALUES ";

# Va concatenando los valores que recupera del fichero
while (fscanf($fichero, '%s %d %s\n', $n, $e, $t))
    $consulta .="('$n', $e, '$t'),";

    fclose($fichero); # Cierra el fichero
    
    $consulta = rtrim ($consulta, ','); # Quita la última coma
    echo $consulta; # Muestra la consulta
    
    
    ?>
