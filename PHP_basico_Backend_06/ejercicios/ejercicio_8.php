<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 en PHP</title>
</head>
<body>
    
    <?php   
    $numero = "-10";
    
    if( $numero == "0"){
        
        print "NO HAS ESCRITO NADA";
        
    } elseif( !ctype_digit($numero)){
        
        print "Has escrito un numero negativo:  $numero";
        
    } else{
        
        print "Has escrito un numero positivo:  $numero";
    
    }
    
    ?>


</body>
</html>