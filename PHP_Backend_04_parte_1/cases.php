<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PHP</title>
</head>
<body>
    <h1>Variable Cases</h1>
    <p> Estas son las formas habituales de nombrar las variables.</p>
    <p> Porconvenio, deberíamos usar camel case para las variables y upper sanke case para las constantes.</p>
    
    <?php   
    $unaVariable   = 0; // camel case (recomendado, por convenio)
    $UnaVariable   = 0; // pascal case
    $una_variable  = 0; // lower snake case
    $UNA_VARIABLE  = 0; // upper snake case
    $unavariable   = 0; // flat case o lower case
    $UNAVARIABLE   = 0; // upper case
    
    
    $àéïçñ         = 0; // nombre permitido en PHP
  //$una-variable  = 0; // Kebab case (Incorrecto en PHP, en CSS)
    
    ?>


</body>
</html>