<?php
require_once '../config/config.php';
require_once '../autoload.php';

# # GUARDAR UN LIBRO

echo "<h2>Guardando el libro 'A sangre fría'..... </h2>";

$libro = new Libro(); # Crea un nuevo objeto Libro

# Pone los valores a las propiedades (Vendrían del formulario)

$libro->isbn = '978-84-339-7123-4';
$libro->titulo = 'A sangre fría';
$libro->editorial = 'Anagrama';
$libro->idioma = 'Castellano';
$libro->autor = 'Truman Capote';
$libro->edicion = 15;
$libro->edadrecomendada = 18;

# Guarda el libro (y se actualiza su ID)
$libro->save();
echo "<p> Guardado conrrectamente con ID: $libro->id</p>";

# Prueba a recuperar el libro de la BBDD para ver si realmente se guardó
echo Libro::find($libro->id);
