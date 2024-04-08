<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparando objetos en PHP</title>
</head>
<body>

<h2>Comparando objetos en PHP</h2>
    
    <?php   
    require_once 'Punto.php';
    
    $punto1 = new Punto(100,200);
    $punto2 = new Punto(100,200);
    $punto3 = new Punto(10,20);
    $punto4 = $punto3;
    
    echo $punto1 == $punto2 ? 'Iguales<br>':'Diferentes<br>';  #Iguales
    echo $punto1 === $punto2 ? 'El mismo<br>' : 'Otro<br>';
    
    echo $punto1 == $punto3 ? 'Iguales<br>' : 'Diferentes<br>';
    
    echo $punto3 == $punto4 ? 'Iguales<br>' : 'Diferentes<br>';
    echo $punto3 === $punto4 ? 'El mismo<br>':'Otro<br> ';
    
    ?>


</body>
</html>