<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexiones persistentes en  PHP</title>
</head>
<body>
    
    <?php   
    
    #Crea una coexión persistente con la BBDD bibliotec
    
    $conexion = new mysqli('p:localhost', 'root' , '' , 'biblioteca');
    
    #Establece codificación 
    
    $conexion -> set_charset('utf8');
    
    echo "<p>La conexión se ha establecido correctamente</p>";
    
    
    #Una vez conectado, hacemos consultas a la BBDD
    
    //.... CONSULTAS A LA BBDD ----------....
    
    
    
    #   Cerramos conexion, puede que no se haga al final del script
    # pero en algún momento habrá que liberar este recurso
    
    $conexion -> close();
    
    ?>


</body>
</html>