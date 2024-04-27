<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas select con PHP</title>
</head>
<body>
    
    <?php   
    
    $conexion = new mysqli('localhost', 'root', '' ,'biblioteca');
    $conexion -> set_charset('utf8');
    
    #Preparamos la consulta
    $consulta = "SELECT * FROM libros WHERE id=1";
    $resultado = $conexion -> query($consulta);
    
    #Si hay resultados..
    if ($resultado -> num_rows){
        
        #Recuperamos el resultado a modo de array asociativo
        $libro = $resultado->fetch_assoc();
        $resultado->free(); //Libera memoria
        
        #Muestra la estructura de $libro
        
        echo "<pre>";
        
        var_dump($libro);
        
        echo "</pre>";
             
    }else{
        echo "No se encontró el libro deseado";
    }
        
    
    ?>


</body>
</html>