<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Detalles del libro</title>
<link rel="stylesheet" type="text/css"
    href="https://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
    <h1>Confirmar borrado de <?= $libro->titulo?></h1>
    
    <menu>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="index.php?controlador=libro/list" class="activo">Lista de libros</a></li>
    <li><a href="index.php?controlador=libro/create">Nuevo libro</a></li>
    </menu>
    <br>
    
    <h2 class="centrado">Confirmar BORRADO</h2>
    
    <h3 class="centrado">¿Estás SEGURO que quieres BORRAR el libro <?= $libro->titulo?> ? </h3>
    
    
    <form method="post" class="centrado" action="index.php?controlador=libro/destroy">
    	<input type="hidden" name="id" value="<?= $id ?>">
    	
    	<input type="submit"  class="button" name="confirmarborrado" value="Borrar">
    </form>
    
    <div class="centrado">
    	<a class="button" href="index.php?controlador=libro/list">Lista de libros</a>    
    </div>


