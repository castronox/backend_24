<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables variables en PHP</title>
</head>
<body>
    
    <?php   
    $test = 'patata';
    
    $$test = 'frita';
    
    $$$test = 'con queso y bacon';
    
    echo $test. ' ';
    echo $patata.' ';
    echo $frita;
    
    /*                  -----OTRAS VARIABLES---------
     * 
     * $http_response_header ------> Encabezado de respuesta http
     * $php_errormsg         ------> Último mensaje de error que se produjo.
     * $argc                 ------> Número de argumentos pasados a un script (CLI)
     * $argv                 ------> Array de argumentos pasados a un script (CLI)))))))
     * 
     * 
     */
    
    ?>


</body>
</html>