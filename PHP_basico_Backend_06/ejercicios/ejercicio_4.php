<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 en PHP</title>
</head>
<body>
    
    <?php 
    echo "<h1>Ejercicio 2 de backend _ 06</h1>";
    
    $limite = 1;
    $multiplo = 50;
    $lista =[] ;
    
    for ($i = 1000; $i > $limite; $i--) {
        if($i % $multiplo == 0)
            
            $lista = [ $i, $multiplo];
            echo $i. " es múltiplo de " .$multiplo . "<br>";
            
            
    }
    
    
    
    
    ?>


</body>
</html>