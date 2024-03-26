<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays asociativos Ejemplo en PHP</title>
</head>
<body>
    
    <?php  
    echo "<h2>Arrays asociativos en PHP</h2>";
    
    #Creación rapida de array asociativo.
    $persona = [
        'nombre'    => 'Juan' ,
        'apellido'  => 'Lopez',
        'edad'      =>  20
    ];
    
    
        echo "<pre>";
        print_r($persona);
        echo "</pre>";
    
    echo "<p>Datos Personales:</p>";
    
    #ForEach para recuperar solamente los valores
    foreach($persona as $valor)
        echo "$valor<br>";
        
    echo "<p>Clave y Valor de Datos Personales <br>";
    
    #Foreach recupera la clave y valor
    foreach ($persona as $clave=>$valor)
        echo "$clave : $valor<br>";
    ?>


</body>
</html>