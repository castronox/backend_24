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
     * $http_response_header ------> Encabezado de respuesta http                           https://www.php.net/manual/es/reserved.variables.httpresponseheader.php
     * $php_errormsg         ------> Último mensaje de error que se produjo.                https://www.php.net/manual/es/reserved.variables.phperrormsg.php
     * $argc                 ------> Número de argumentos pasados a un script (CLI)         https://www.php.net/manual/es/reserved.variables.argc.php
     * $argv                 ------> Array de argumentos pasados a un script (CLI)          https://www.php.net/manual/es/reserved.variables.argv.php
     * 
     * 
     */
    
    ?>


<h1>Ejemplo de HTTP Response header</h1>
<pre>
<?php 
    file_get_contents("http://juegayestudia.com");
        var_dump($http_response_header);

?>
</pre>

</body>
</html>