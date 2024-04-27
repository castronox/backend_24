<?php

# Carga la libreria
include 'libraries/FileList.php';

# Usaremos el método estático FileList::get()
# en el primer parámetro indicamos la carpeta, si no
# lo indicamos usará el directorio actual
# el segundo parámetro indica tipos y debe ser una expresión regular,
# si no lo indicamos listará todo lo que encuentre
$archivos = FileList::get('imagenes', '/\.(gif|jpe?g|png)$/i');

# Genera las figuras de la galería
foreach ($archivos as $archivo) {
    ?>

<figure>
	<img src='<?= $archivo ?>'>
	<figcaption><?= $archivo ?></figcaption>
</figure>

<?php } ?>
