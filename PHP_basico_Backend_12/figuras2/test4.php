<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clonando objetos en PHP</title>
</head>
<body>

<h2> Clonando objetos en php</h2>
    
    <?php   
    require_once 'Punto.php';
    
    $punto1 = new Punto(100,200);                           # Crea un punto
    $punto2 = $punto1;                                      # Punto 2 no es un nuevo objeto, es punto1
    
    $punto3 = clone $punto1;                                # Punto 3 es una copia de punto 1
    
    echo $punto1 == $punto2 ? 'Iguales' : 'Diferentes';     # Iguales
    echo $punto1 === $punto2 ? 'Iguales' : 'Diferentes';    # El mmismo
    
    echo $punto1 == $punto3 ? 'Iguales ' : 'Diferentes ';   # Iguales
    echo $punto1 === $punto3 ? 'Iguales' : 'Diferentes';    # Otro
    
    
    
    ?>


</body>
</html>