<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array pop en PHP</title>
</head>
<body>
    
    <?php   
    
    $lista = ['Pepe','Eva', 'Marta','Carlos'];
    
    //Extrae el último elemento del array (Calros)
    $ultimo = array_pop($lista);
    
    echo "<p>$ultimo</p>";
        
    
    echo "<pre>";
    print_r($lista);
    echo "</pre>";
    ?>


</body>
</html>