<?php   
  
require 'SaveGame.php';

# Guardando la partida... 

$partida = new SaveGame("Cristian" , 1500, ['Red Herb', 'Silver Key']);

$fichero = fopen('saves/savegame1.dat','w');  # Abre el fichero

# Guarda una representación serializada del objeto
fwrite($fichero, serialize($partida));

fclose($fichero);           # Cierra el fichero
echo "Partida guardada con Éxito";
    
    ?>
