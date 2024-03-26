<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle While PHP</title>
</head>
<body>
    
    <?php   
    echo '<h2>Bucle While</h2>';
    
    $i = 1;                     // Comenzaremos en 1
    
    while($i <= 5){             // Si $i es menor o igual a 5
        echo $i. '<br>';        // imprime $i        
        $i++;                   // incrementa $i
    }
    
    ?>


</body>
</html>