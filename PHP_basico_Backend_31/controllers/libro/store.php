<?php
# Comprueba si llega el formulario

if(empty($_POST['guardar']))
    throw new FormException('No se recibió el formulario');

    
     # Crea un nuevo libro y toma sus valores del POST
     Libro::create([
     
     
     'isbn'               => $_POST['isbn'],
     'titulo'             => $_POST['titulo'],
     'editorial'          => $_POST['editorial'],
     'autor'              => $_POST['autor'],
     'idioma'             => $_POST['idioma'],
     'edicion'            => intval($_POST['edicion']),
     'edadrecomendada'    => intval($_POST['edadrecomendada'])
     
     ]);
     
     
     
     
     # Prepara un mensaje y carga la vista de éxito.
     
     $mensaje = "¡Nuevo libro guardado! <h3>".$_POST['titulo']."</h3> ";
     
     require'../views/exito.php';