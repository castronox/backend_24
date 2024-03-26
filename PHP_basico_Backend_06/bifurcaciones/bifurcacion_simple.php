<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bifurcaciones Simples PHP</title>
    
</head>
<body>

<h1>Bifurcaciones simples en PHP</h1>
    
    <?php   
    $nota =6; 
    
    //Bifurcación Simple en PHP
    
    if($nota<5){ echo "<p> Has suspendido </p>"; }
    
    
    //Bifurcación Simple 2
    //Si solamente contiene una sentencia, podremos omitir las llaves.
    if($nota>=5)
        echo "<p>Has aprobado.</p>";
        
    echo "<p>Fin del programa </p>";
    
    
    
    ?>


</body>
</html>