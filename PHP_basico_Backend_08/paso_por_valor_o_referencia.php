<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso por valor o referencia PHP</title>
</head>
<body>

<h1> Paso por valor y referencia </h1>
<p>Las variable de tipos primitivos se pasan por el valor, a no ser que indiquemos lo contrario haciendo uso del &.</p>

    
    <?php   
    
    function valor(int $numero){  #El paso por valor no modifica el valor original, simplemente hace una copia.
        $numero++;
    }
    
    
    function referencia(int &$numero){ #El paso por referencia apunta directamente al valor original, este SÍ que modifica el valor final
        $numero++;
    }
    
    
    #Pruebas
    
    $test = 10;
    
    valor($test);       #No se modifica la variable test.
    echo $test.'<br>';
    
    referencia($test);  #Este si que modifica la variable.
    echo $test.'<br>';
    
    
    ?>


</body>
</html>