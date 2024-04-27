<?php

# PROTOTIPO : void for_each (array &$lista, callable $funcion)
function for_each(array &$lista, callable $funcion)
{
    for ($i = 0; $i < count($lista); $i ++) {

        $funcion($lista[$i]);
    }
}
# Pruebas
$lista = [
    1,
    2,
    3,
    4,
    5
];

# Aplica la funcion flecha a cada elemento de la lista
for_each($lista, fn (&$n) => $n = $n ** 2);

print_r($lista);

?>


