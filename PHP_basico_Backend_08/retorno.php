<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de retorno en PHP</title>
</head>
<body>
    
    <?php   
    
    # Funcion que retorna los divisores de un un número natural en un array.
    # PARAMETROS: El número
    # RETORNO :Un array con los divisores
    
    # CONSIDERACIONES:
    # Si el numero es menor de 1 retorna null (Observad el ?)
    
    
    function divisores(int $numero):?array{
        
        if ($numero <1)
            return NULL;
        
        $lista = [];
        
        
        
        for($i=1; $i<=$numero/2; $i++)
                if($numero % $i == 0 )
                        $lista[] = $i;
            
        $lista[] = $numero;
        
        return $lista;
    }
    
    
    //Pruebas 
    
    echo "<pre>";
    
    print_r(divisores(2));
    print_r(divisores(18));
    print_r(divisores(97));
    print_r(divisores(-2) ?? '<br> No valido');
    
    echo "</pre>";
    ?>


</body>
</html>