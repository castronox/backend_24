<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forzado de tipos</title>
</head>
<body>
    <h1>Forzado de conversión de tipos</h1>
    
    
    <?php 
    
    // Variable de tipo String o cadena de texto...
    $variable = "9.99 es el precio de los pantalones";
    echo "<p>Variable es de tipo " .gettype($variable). ", y su valor es: $variable</p>";
    
    // "cast" de tipo a Double
    $variable = (double) $variable;
    echo "<p>Variable es de tipo " .gettype($variable). ", y su valor es: $variable</p>";
    
    // conversión de double a INT con settype()
    settype($variable, 'int');
    echo "<p>Variable es de tipo " .gettype($variable). ", y su valor es: $variable</p>";
    
    // cambiando el tipo a String aprovechando la determinación dinámica
    $variable .= '';
    echo "<p>Variable es de tipo " .gettype($variable). ", y su valor es: $variable</p>";
    
    // conversión de String a int con intval()
    $variable = intval($variable);
    echo "<p>Variable es de tipo " .gettype($variable). ", y su valor es: $variable</p>";
    
    
    /*
     * Forzados o 'CAST' que podemos realizar en caso de ser necesarios:
     * 
     * --------OPERACIÓN-----------------------------SIGNIFICADO---------------
     * 
     *    - (int)  o (integer)            -->     Forzado a integer.  https://www.php.net/manual/es/language.types.integer.php
     *    - (bool) o (boolean)            -->     Forzado a boolean.  https://www.php.net/manual/es/language.types.boolean.php
     *    - (float), (double) o (real)    -->     Forzado a float.    https://www.php.net/manual/es/language.types.float.php
     *    - (string)                      -->     Forzado a string.   https://www.php.net/manual/es/language.types.string.php
     *    - (array)                       -->     Forzado a array.    https://www.php.net/manual/es/language.types.array.php
     *    - (object)                      -->     Forzado a objeto    https://www.php.net/manual/es/language.types.object.php
     *    - (unset)                       -->     Forzado a NULL      https://www.php.net/manual/es/language.types.null.php
     *
     * */
    
    
    ?>


</body>
</html>