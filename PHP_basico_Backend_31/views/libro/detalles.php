
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Detalles del libro</title>
<link rel="stylesheet" type="text/css"
    href="https://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    <h1 >Detalles de <?= $libro->titulo?></h1>
    
    <menu>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="index.php?controlador=libro/list" class="activo">Lista de libros</a></li>
    <li><a href="index.php?controlador=libro/create">Nuevo libro</a></li>
    </menu>
    <br>

<h3>Detalles del libro:</h3>
<h2><b><?=$libro->titulo ?></b></h2>

<p><b>ISBN:</b>					<?= $libro->isbn?></p>
<p><b>Titulo:</b>				<?= $libro->titulo?></p>
<p><b>Editorial:</b>			<?= $libro->editorial?></p>
<p><b>Autor:</b>				<?= $libro->autor?></p>
<p><b>Idioma:</b>				<?= $libro->idioma?></p>
<p><b>Edición:</b>				<?= $libro->edicion?></p>
<p><b>Edad recomendada:</b>		<?= $libro->edadrecomendada ? $libro->edadrecomendada : 'TP'?></p>

<div class = "centrado">
	<a class="button" href="index.php?controlador=libro/list">Lista de libros</a>
</div>
</body>