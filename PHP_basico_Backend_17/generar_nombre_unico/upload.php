<?php   

if ($codigo = $_FILES['fichero']['error'])
    throw new Exception("ERROR con código $codigo");

$rutaTemporal = $_FILES ['fichero']['tmp_name'];

$nombre = $_FILES['fichero']['name'];                         # Nombre del fichero
$extension = pathinfo($nombre, PATHINFO_EXTENSION);         # Extensión

$nuevoNombre = uniqid('file_');                             # Calculo de la ruta Final

$rutaFinal = "files/$nuevoNombre.$extension";               # Cálculo de la ruta final

if(!move_uploaded_file($rutaTemporal, $rutaFinal))          # Mueve el fichero de la ruta temporal a la ruta final
    throw new Exception("Error al mover el fichero $nombre.");

echo "<p>El fichero $nombre se ha movido correctamente de la ruta temporal a la ruta final";


    
    
    ?>
