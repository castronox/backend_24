<?php
# Ruta del fichero en la carpeta temporal
$ruta = $_FILES['fichero']['tmp_name'];

# Forma orientada a OBJETO

$finfo = new finfo(FILEINFO_MIME_TYPE);
echo $finfo->file($ruta) . '<br>';

?>