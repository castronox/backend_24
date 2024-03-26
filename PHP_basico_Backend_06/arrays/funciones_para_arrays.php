<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones para arrays en PHP</title>
</head>
<body>
    
    <?php   
    
    
     #Array indexado de dos elementos String.
     
    $lista = ['las' ,'patatas'];
    
    #Añade tres elementos más
    
    array_push($lista, 'con', 'Pimiento', 'rojo');
    
    
    #Extrae el último elemnto y lo imprime.
    echo '<p>' . array_pop($lista) . '</p>';  //En el ejemplo de la pág 57  de la diapo 06 falta el slash de cierre del parrafo.
    
    #Mezcla el array
    shuffle($lista);
    
    # Junta las pasrtes del array en una cadena de texto
    echo implode(' ', $lista );
    ?>


</body>
</html>