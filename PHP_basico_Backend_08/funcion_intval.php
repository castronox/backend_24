<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>
<body>
    
    <?php   
    #En php LAS FUNCIONES PREDEFINIDAS del lenguaje se denominan como EXTENSIONES.
    
    
    
    #Ejemplo de funcion de PHP intval()
    
    $texto = "25 elefantes se balanceaban";
    echo intval($texto).'<br>';
    
    $numero = 3.1416;
    echo intval($numero).'<br>';
    
    $texto = "FF";
    echo intval($texto,16).'<br>';
    
    $texto = "101010";
    echo intval($texto,2).'<br>';
    
    ?>


</body>
</html>