<?php

# Funciones Anónimas en PHP

# Función normal, con nombre
function holaMundo()
{
    echo "Hola mundo.";
}

# Función anónima, guardada en una variable.
# El tipo de la variable será 'callable'.

$miFuncion = function () {
    echo "Adiós mundo!";
};

holaMundo(); # Invoca la función holaMundo();
echo "<br>";
$miFuncion(); # Invoca la función anónima

?>


