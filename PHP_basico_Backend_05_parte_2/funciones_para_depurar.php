<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para depurar en PHP</title>
</head>
<body>

<h1>Depurando</h1>

<p>var_dump() es una función que nos ayudará mucho a depurar nuestros programas y corregir errores, tenedla muy presente.</p>
    
    <?php   
    
    //Array con distintos tipos de datos
    
    $lista = [1,"pepe", 22.3, NULL];
    
    echo "<pre>";
    
    //Muestra la estructura en detalle
    var_dump($lista);
    
    
    //Va bien para montar arrays, pero sin tanto detalle
    print_r($lista);
    
    echo "</pre>";
    
    ?>


</body>
</html>