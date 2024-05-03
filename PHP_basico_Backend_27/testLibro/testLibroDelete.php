<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>
<h2>Borra un libro</h2>
<p>Podemos usar el método de objeto <code>deleteObject()</code>
o el método estático <code>delete()</code>.</p>


<?php
# Borramos el libro que acabamos de crear y modificar
$filasAfectadas = Libro::delete(6);

#Usando el método de objeto sería así:
# $filasAfectadas = $libro->deleteObject();

# Comprobamos si ha borrado algo o no
echo $filasAfectadas === 0 ? 
"<p>No se realizó nigún cambio...</p>":
"<p>Se realizó el borrado, $filasAfectadas fila/s afectadas.</p>";


# Comprobamos si existe el libro o no .

echo "<p>". (Libro::find($libro->id) ?? 'NO EXISTE !'). "</p>";

?>