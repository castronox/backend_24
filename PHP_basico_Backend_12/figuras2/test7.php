<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accediendo a una propiedad estática en PHP</title>
</head>
<body>


    
    <?php   
        require_once 'Punto.php';                   # Carga la clase punto
        
        echo "<h2> Propiedades estáticas</h2>";
        echo Punto::$puntoscreados.'<br>';          # 0
        
        $punto1 = new Punto(100,200);               # Crea un punto
        $punto2 = new Punto(200);
        $punto3 = new Punto();
        
        echo Punto::$puntoscreados.'<br>';          # 3
        
    
    ?>


</body>
</html>