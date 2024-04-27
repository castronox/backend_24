<?php
require_once 'exceptions/UploadException.php';
require_once 'libraries/Upload.php';

$subidos = []; # Lista de ficheros subidos.

try {

    # Para cada fichero que llega...
    foreach ($_FILES as $clave => $valor) {

        $nombre = $_FILES[$clave]['name'];

        # Guarda el fichero actual
        $nuevoNombre = Upload::save($clave, 'imagenes', true, 1048576, 'image/*', '', true);

        # Añade a la lista de ficheros subidos.

        $subidos[] = $nuevoNombre;

        echo "<p>Fichero $nombre subido como $nuevoNombre.</p>";
    }
} catch (UploadException $e) {

    echo "<p>Error en la subida: " . $e->getMessage() . "</p>";

    # Hay que borrar los ficheros que ya se habían subido.
    foreach ($subidos as $borrar) {

        echo "<p>Borrando $aBorrar...</p>";
        @unlink($aBorrar);
    }

    echo "<p> Se ha eliminaron todos los ficheros subidos.</p>";
}

?>
