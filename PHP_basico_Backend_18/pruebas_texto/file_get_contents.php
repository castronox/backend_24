<?php   
echo "<h2> Contenido de un fichero </h2>" ;

# file_get_contents() abre el fichero,
# Lee el contenido retornando un string y finalmente lo cierra

$texto = file_get_contents('textos/cuento.txt');

echo "<p> $texto </p>";

echo "<h2> Contenido de una URL </h2>";

# También podemos recuperar el contenido URL

$texto = file_get_contents('http://juegayestudia.com/css/estilo.css');

echo "<pre> $texto </pre>";
    
?>
