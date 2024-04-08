<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando métodos creados en PHP</title>
</head>
<body>
    
    <?php   
    require_once 'Punto.php';
    
    $punto1 = new Punto(100,200);       # 100,200
    echo $punto1. "<br>";
    
    $punto1->mover(10,12);              # Mueve el punto
    echo $punto1. '<br>';               # (110,212)
    
    
    $punto1->aOrigen();                 # Lleva el punto a Origen
    echo $punto1. '<br>';               # (0,0)
    
    ?>


</body>
</html>