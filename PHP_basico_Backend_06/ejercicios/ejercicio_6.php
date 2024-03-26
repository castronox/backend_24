<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 PHP</title>
</head>
<body>

<h1>Ejercicio 6 de Backend _ 06</h1>
    
    <?php   
    
    
    $limite = 11;
    
    for ($i = 1; $i < $limite; $i++) {
        
        echo '<h3>Tabla del ' . $i. '<br></h3>';
        for( $j = 0; $j < 10; $j++ ){
            
            
             echo "El resultado de $i x $j es: ". $i * $j .'<br>';
        }
    }
    
    
    ?>


</body>
</html>