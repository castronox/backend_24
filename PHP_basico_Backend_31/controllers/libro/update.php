<?php
# Comprueba si llega el formulario

if(empty($_POST['actualizar']))
    throw new Exception('No se recibió ningun formulario');

# Recupera el libro a partir del ID (OJO que ahora va por post).
$libro = Libro::findOrFail(intval($_POST['id']), 'No se encontró el libro');


# Actualiza los campos de libro con todos los datos del formulario

$libro->isbn                = $_POST['isbn'];
$libro->titulo              = $_POST['titulo'];
$libro->editorial           = $_POST['editorial'];
$libro->autor               = $_POST['autor'];
$libro->idioma              = $_POST['idioma'];
$libro->edicion             = intval($_POST['edicion']);
$libro->edadrecomendada     = intval($_POST['edadrecomendada']);


$libro->update();           # Actualiza el LIBRO en la BBDD.

# Prepara el mensaje y carga la vista de éxito.

$mensaje = "Actualización del libro $libro->titulo correcto.";

require '../views/exito.php';


