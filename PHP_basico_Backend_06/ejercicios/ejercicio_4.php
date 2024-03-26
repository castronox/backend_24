<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 en PHP</title>
</head>
<body>
    
    <?php 
    echo "<h1>Ejercicio 4 de backend _ 06</h1>";
    
    $limite = 1;
    $multiplo = 50;
    
    
    for ($i = 1000; $i > $limite; $i--) {
        if($i % $multiplo == 0)
            
            
            echo $i. " es múltiplo de " .$multiplo . "<br>";
            
            
    }
    
    
    
    
    ?>


</body>
</html>