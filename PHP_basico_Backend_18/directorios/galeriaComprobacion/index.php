
<?php
$directorio = 'imagenes';

# Expresión regular para indicar los tipos permitidos.

$filtro = '/\.(.gif|jpe?g|png)$/i';

$entradas = scandir($directorio);

$filtrados = [];

foreach ($entradas as $entrada)
    if (preg_match($filtro, $entrada))
        $filtrados[] = $entrada;

sort($filtrados);

foreach ($filtrados as $fichero) {
    ?>

<figure>
	<img src='<?= "$directorio/$fichero"?>'>
	<figcaption><?= "$directorio/$fichero"?></figcaption>
</figure>

<?php } ?>

    ?>
    