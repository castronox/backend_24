<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables inexistentes</title>
   
</head>
<body>
<h2>Variables inexistentes</h2>

<p> Si una variable no existe en el momento de acceder para su lectura, PHP muestra una advertencia pero sigue con el script asignando
un valor por defecto que dependerá del tipo que determine dinámicatmente.
    
    <?php   
    // La variable $a vale 100 
    $a = 100;
    
    // Sumamos $ a con $b, pero $b no existe.
    $resultado = $a + $b ;
    
    // Mostrará 100 . PHP asumirá el valor por defecto de 0 para $b
    // Al estar en una operación aritmética (suma)
    echo "<b>El valor calculado es $resultado. </b>";
    
    ?>

<p>Prueba de que funcionan los commits.</p>
</body>
</html>