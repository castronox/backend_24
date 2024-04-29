<?php
require_once '../config/config.php';
require_once '../autoload.php';

# Actualiza un Socio

echo "<h2>Actualizando el socio numero 3</h2>";

$ocio = Socio::find(3);

echo "<p>$ocio</p>";

echo "<pre>";
var_dump($ocio);
echo "</pre>";

# Cambiamos algunos datos...

$ocio->nombre = 'Rigoberto';

$ocio->email = 'rigoberto@gmail.com';

$ocio->poblacion = 'Manresa';


# Actualizamos, en caso de fallo lanzaría una excepción

$numeroFilasActualizadas = $ocio->update();

echo "<p>Actualización correcta de $numeroFilasActualizadas registros.</p>";


# Recuperamos de nuevo el socio y lo imprimimmos en pantalla para
# observar los cambios producidos.

echo Socio::find(3);


