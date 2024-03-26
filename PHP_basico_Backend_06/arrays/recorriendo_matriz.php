<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reocrriendo matrices en PHP</title>
</head>
<body>
    
    <?php   
    
    
    //Creación de la matriz dibujo
    
    $matriz = $matriz = [ [1,2,3] , [4,5,6] , [7,8,9] ];
    
    
    //La variable $i contiene el indice de los arrays hijos dentro del padre    
    for ($i = 0; $i <count($matriz); $i++) {
        
        //Con este bucle obtenemos los datos del primer array hijo indexado en $i
        for ($j = 0; $j < count($matriz[$i]); $j++) { 
            
            //Con la siguiente instrucción le diremos que en cada nueva iteración multiplique x10 cada dato en el array.
            $matriz[$i][$j] *= 10;
            
        }
        
        //Cuando finaliza la iteración del primer array hijo, incrementa | suma en 1 $i y a continuacion $i en vez de valer 0 ahora vale 1,
        //lo que significa que saltamos a iterar el segundo array hijo dentro de $matriz y así hasta que el primer bucle recorra el último array hijo.
           
    }
    
    
    echo "<pre>";
    print_r($matriz);
    echo "</pre>";
    
    ?>


</body>
</html>