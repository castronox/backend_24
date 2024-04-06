<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambito global PHP</title>
</head>
<body>
    <h1>Problemas en el ambito global en PHP</h1>
    
    <h2>Problema</h2>
    <p>Las varuiable globales en PHP tienen alcance simple.</p>
    
    
    <?php   
   
    $nombre = "pepe"; #Variable de ambito global
    
    #Esta función tratará de imprimir la variable global, pero en PHP
    # desde dentro de las funciones no se ven las variables globales
    function imprimir(){
        echo $nombre; #WARNING $nombre no existe en el ambito local
    }
    
    #PRUEBA
    imprimir(); #Si funciona debería imprimir pepe (PERO NO FUNCIONANRÁ)
    ?>


</body>
</html>