<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays por valor y referencia en PHP</title>
</head>
<body>

<h1>Arrays paso por valor y referencia</h1>

<p>Los arrays se pasan por valor en PHP (es raro), sin embargo podemos forzar el paso por referencia con el $</p>
    
    <?php   
    
    function valor (array $a){
        $a[]= 'd';                #Añade el valor d al final.
    }
    
    
    function referencia(array &$a){
        $a[] = 'e';               #Añade el valor E al final.

    }
    
    
    
    $test = ['a','b','c'];
    
    valor($test);
    print_r($test);     #No se modifica
    echo '<br>';
    
    referencia($test);  #Si se modifica
    print_r($test);
    
    
    
    
    
    ?>


</body>
</html>