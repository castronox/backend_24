<?php   
    
  $carpeta = 'datos/usuarios';
  
  #Si no existe el directorio...
  if (!is_dir($carpeta))
      mkdir($carpeta); # Crea el directorio
  
      # Si el directorio ya existía
      else 
          rmdir($carpeta);   #Lo borra
      
      # Crea un enlace
      # symlink('datos/usuarios.dat', 'enlace'); # Esto es en linux
      
          # Imprime el destino del enlace
         # echo readlink('enlace');
          
          #Imprime el destino del enlace
         # echo readlink('enlace');
          
          
      
      
    ?>
