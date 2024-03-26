<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de HEREDOC en PHP</title>
</head>
<body>
    
    <?php   
    $a = "patatas";
    $b = 100 ;
    
    #HEREDOC
    
    $texto = <<<EOT
Hay $b $a en la cesta.\n
Estaría bien si no pesaran tanto.\n
Pesan mucho.
EOT;
    
    echo $texto . '<br>';
    
    ?>


</body>
</html>