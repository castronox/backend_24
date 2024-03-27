<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas INSERT con PHP</title>
</head>
<body>
    
    <?php   
    
    #Establecemos conexión
    
    $conexion = new mysqli('localhost', 'root', '' , 'biblioteca');
    $conexion -> set_charset('utf8');
    
    #Prepara una consulta de inserción en un String (RECOMENDADO)
    
    #Es útil si tenemo que depurar porque podremos hacer echo $consulta
    #para visualizar los errores, incluso podemos copiar y pegar en WORKBENCH.
    
    $consulta = 
        "INSERT INTO libros(
         isbn, titulo, editorial, idioma, autor, edicion, edadrecomendada
          )VALUES(
        '123456', 'Neverending Story', 'Alfaguara', 'English', 'Michael Ende', 5, 3)";
    
    #Ejecuta la consulta que acabamos de preparar
    $conexion -> query($consulta);
    
    #Muestra el resultado
    echo "Todo OK, el registro de connexión es $conexion->insert_id </p>";
    
    
    ?>


</body>
</html>