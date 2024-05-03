<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>

<h2>Guarda un libro</h2>
<p>Usamos el método objeto <code>save()</code>.</p>

<p>Se aplica sobre el objeto de tipo Libro que queremos guardar en BBDD.</p>

<?php

$libro = new Libro(); // Crea un nuevo objeto Libro 

# Pone los valores a las propiedades (vendrían de un formulario)

$libro->isbn                         = '978-85-345-7576-2';
$libro->titulo                       = 'A sangre Fría';
$libro->editorial                    = 'Anagrama';
$libro->idioma                       = 'Castellano';
$libro->autor                        = 'Truman Capote';
$libro->edicion                      = 5;
$libro->edadrecomendada              = 18;


$libro->save();  # Guarda el libro (y se actualiza su ID).
echo "<p>Guardado Corretamente con ID: $libro->id</p>";

# Recuopera el libro desde la BBDD para ver si realmente se guardó
echo Libro::find($libro->id);

?>
