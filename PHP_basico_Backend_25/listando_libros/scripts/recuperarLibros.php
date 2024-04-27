
    <?php
    # Lanza la consulta
    $resultado = $conexion->query("SELECT * FROM libros");

    # Prepara una lista de libros
    $libros = [];

    while ($libro = $resultado->fetch_object('Libro')) {
        $libros[] = $libro; # Y lo mete en la lista
    }

    $resultado->free(); # Liberamos memoria

    # En este punto, hemos convrtido el resultado de la consulta en una lista de libros.
    ?>
