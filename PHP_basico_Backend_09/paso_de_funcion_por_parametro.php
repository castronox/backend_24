<?php

# Función que ejecuta las funciones que se le pasan
# Portotipo: void ejecutar ([callable $...])
function ejecutar(callable ...$funciones)
{
    foreach ($funciones as $f)
        $f();
}

$f1 = function () {
    echo " Hola !";
};

$f2 = function () {
    echo " Mundo !";
};

ejecutar($f1, $f2, $f1, $f2);

?>

