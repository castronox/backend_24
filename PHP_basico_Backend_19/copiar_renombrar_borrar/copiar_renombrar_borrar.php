<?php   

# Copiar un fichero varias veces

copy('datos/usuarios.dat', 'datos/a');
copy('datos/usuarios.dat', 'datos/b');
copy('datos/usuarios.dat', 'datos/c');

#Renombra un fichero
rename('datos/a', 'datos/a.txt');

#Borra un fichero
unlink('datos/b');


    ?>
