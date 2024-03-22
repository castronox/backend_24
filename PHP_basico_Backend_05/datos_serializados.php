<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serializar en PHP</title>
</head>
<body>

<h1>Funciones serialized(); y unserialized();</h1>

<p>Las funciones de serializar sirven para construir o para generar cadenas serializadas.<br>
estas funciones son representadas como serialize(); y unserialize();</p>
    
    <?php   
    
    
    //Serializaremos 3 tipos de datos
    
    $nombre = "Jesus Montero";  // Generamos un String
    $edad = 38;                 // Generamos un INT
    
                                // Y por último un array.
    $usuario = [
      'nombre' => 'Adrián Cuevas',
      'edad'   => 25,
      'email'  => 'adri@ejemplo.com' 
    ];
    
    //Acontinuación, procedemos a serializar con la función serialized();
    
    $nombre_serializado  = serialize($nombre);
    
    $edad_serializada    = serialize($edad);
    
    $usuario_serializado = serialize($usuario);
    
    //Imprimimos en pantalla los resultados serializados
    
    
    //Impresión del resultado de NOMBRE
    echo "<p>El resultado sin serializar de la variable nombre es: $nombre, y el usuario serializado es : $nombre_serializado";
    
    //Impresión del resultado de EDAD
    echo "<p>El resultado sin serializar de la variable edad es: $edad, y el resultado serializado sería : $edad_serializada <br>";
    
    //Impresión del resultado de USUARIO
    echo "<p>El resultado sin serializar del array usuario es:";
    echo "<pre>";
    print_r ($usuario);
    echo"</pre>";
    echo "<p> Y el resultado serializado sería :<br> $usuario_serializado </p>";
    
    
    echo "<p>Todo junto se veria algo así:<br>$nombre_serializado <br>$edad_serializada <br>$usuario_serializado";
    
    
    ?>


</body>
</html>