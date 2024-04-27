<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejar eror de conexion en PHP</title>
</head>
<body>
    
    <?php   
    
    
    #EJEMPLO PARA VERSIONES ANTERIORES A MYSQL 8.1 -------------------
    
    #Crea una conexión con la BBDD biblioteca
    $conexion = @new mysqli('localhost' , 'root', '' ,'biblioteca');
    
    #Si no se pudo conectar ...
    if($conexion -> connect_errno)
            throw new Exception("Error al conectar con BBDD: " . $conexion -> connect_error);
            
    #Establece el conjunto de caracteres en UTF-8
    $conexion -> set_charset('utf8');
    
    echo "<p>La conexión se ha establecido correctamente</p>";
    ?>


</body>
</html>