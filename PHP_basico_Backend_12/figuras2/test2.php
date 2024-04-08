<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencias PHP</title>
</head>
<body>
    
    <?php   
    require_once 'Punto.php';
    
    $punto1 = new Punto(100,200); # Crea un nuevo punto 
    echo $punto1. "<br>";         # (100 ,200)
    
    $punto2 = $punto1;            # No crea un nuevo punto.
    $punto2->x +=50;
    $punto2->y +=50;
    
    unset($punto2);               # Elimina la referencia $punto2
    
    echo $punto1."<br>";          # (100,250)
    ?>


</body>
</html>