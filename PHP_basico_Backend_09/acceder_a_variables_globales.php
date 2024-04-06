<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PHP</title>
</head>
<body>

<h2> Posibles soluciones</h2>
    <p>Podemos indicar que usaremos la variable global o recuperarla desde $GLOBALS.</p>
    <?php   
    
    $nombre = 'Pepe';
    
    function imprimir1(){
        global $nombre; #Indica que usaremos la variable GLOBAL.
        
        echo $nombre;
       
    }
    
    function imprimir2(){
        echo $GLOBALS['nombre'];
    }
    
    
    imprimir1();
    echo "<br>";
    
    imprimir2();
    echo "<br>";
    ?>


</body>
</html>