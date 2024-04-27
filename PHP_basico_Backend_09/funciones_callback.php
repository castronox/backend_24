<?php

// PROTOTIPO: holaMundo([callable $callback = NULL]) : void;
function holaMundo(callable $callback = NULL)
{

    # Ejecuta su labor principal
    echo 'Hola Mundo';

    # Una vez finalizada su tarea, si hay función de callback, la ejecuta.
    if ($callback)
        $callback();
}

holaMundo();
echo "<br>";

holaMundo(function () {
    echo ' Callback';
});
?>

