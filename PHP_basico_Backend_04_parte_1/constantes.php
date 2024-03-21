<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes PHP</title>
</head>
<body>
    <h3>Definiendo un HOST con una constante.</h3>
    <?php   
    
    
    
    define('HOST', '10.199.26.170');
    echo HOST;
    
    echo '<br><p>Función defined.</p>';
    echo defined('HOST') ? HOST : 'No existe el HOST.';
    ?>


</body>
</html>