<?php

# Abre un fichero para escritura
$fichero = fopen('textos/fabula.txt', 'w');

# Escribe el fichero
fwrite($fichero, 'La tortuga ganó a la liebre. Fin');

# Cierra el fichero
fclose($fichero);

echo "Escritura del fichero realizada correctamente";

?>
