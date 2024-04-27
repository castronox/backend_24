<?php

# Funcion iscallable() en PHP
function saludar()
{
    echo "Hola";
}

function despedir()
{
    echo "Adiós";
}

# Recuperamos el parámetro de la operación por GET
# Hemos indicado que la operación saludar() se haga por defecto

$funcionAInvocar = $_GET['operacion'] ?? 'saludar';

# Comprueba si la funcion es invocable

if (is_callable($funcionAInvocar))
    $funcionAInvocar();
else
    echo "La funcion $funcionAInvocar no existe.";
?>

