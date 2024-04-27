<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de libros en PHP</title>
</head>
<body>
    <h1>Lista de libros.</h1>
    <ul>
    <?php   
    
    foreach ($libros as $libro)
        echo "<li>$libro</li>";
    ?>
	</ul>

</body>
</html>