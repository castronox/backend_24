<?php

#--------------------MANERA DE HACERRLO 1--------------------------------------


# Comnprueba si llega el ID del libro por la URL
#   
#   if (empty($_GET['id']))
#    throw new NothingToFindException("Falta el ID del libro.");
#
#  
#    $id = intval($_GET['id']);  # Toma a el ID del libro
#    

    
# Recupera el libro y comprueba que existe
#if (empty($libro = Libro::find($id)))
#       throw new NotFoundException("No existe el libro $id.");


#-----------------------MANERA 2------------------------------------------------- 
 
#Este ejemplo esidéntico al anterior, pero más corto

# Recupera el libro a partir de ID
# Si no llega el ID o si no se encuentra el libro lanza excepciones

$libro = Libro::findOrFail(intval($_GET['id']), 'No se encontró el libro');
 
# Carga la vista de detalles del libro
require '../views/libro/detalles.php';