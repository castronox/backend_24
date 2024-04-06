<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implicación de tipos y parámetros PHP</title>
</head>
<body>
    
    <?php   
    function suma(float $a = 0, float $b = 0):float{
        return $a + $b;
    }
    
    echo suma(5,10);
    echo "<br>";
    
    echo suma(5);
    echo "<br>";
    
    echo suma();
    echo "<br>";
    
    echo suma(5,2,3);
    echo "<br>";
    
    ?>


</body>
</html>