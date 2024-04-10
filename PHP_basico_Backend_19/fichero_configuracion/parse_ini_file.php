<?php   
echo "<pre>";


# Analizar sin tener en cuenta la selecciones
$array = parse_ini_file("config.ini");
print_r($array);


echo "<br><br>";

# Analizar teniendo en cuenta las secciones

$array = parse_ini_file("config.ini", true);

print_r($array);

echo "</pre>";


    
    ?>
