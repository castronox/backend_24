<?php
// Comprueba que llega el formulario de confirmación de borrado 
if (empty($_POST['confirmarborrado']))
    
    throw new FormException("No se acepto la confirmación"); 

# Recupera el libro a partir del ID (OJO que ahora va por POST).
$libro = Libro::findOrFail(intval($_POST['id']), 'No se encontró el libro');

# Comprueba si el libro a partir del ID (ojo que ahora va por POST).
if($libro->hasAny('Ejemplar'))
    throw new Exception('No se puede borrar un libro si tiene ejemplares.');

# Borra el libro
$libro->deleteObject();

# Prepara el mensaje y muestra la vista del éxito
$mensaje = "Borrado del libro $libro->titulo, de $libro->autor correcto.";
require '../views/exito.php';       #Mostrar éxito.