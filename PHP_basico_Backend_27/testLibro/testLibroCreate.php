<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>

<h2>Guarda un libro (forma alternativa)</h2>
<p>Usamos el método estático <code>create()</code>.</p>


<?php
$id = Libro::create([
    'isbn' => '99-765-776-5-656-7-5',
    'titulo' => 'El problema final',
    'editorial' => 'Planeta',
    'autor' => 'Arturo Pérez-Reverte',
    'edicion' => 1    
]);

echo "<p>Guardado correctamente con ID: $id</p>";

# Recupera el libro desde la BBDD para ver si realmente se guardó
echo "<p>".(Libro::find($id) ?? 'NO EXISTE'). "</p>";

# Lo borramos
Libro::delete($id);

# Comprobamos si existe el libro o no
echo "<p>".(Libro::find($id) ?? 'NO EXISTE'). "</p>";
?>
