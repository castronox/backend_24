<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizar Libros</title>
<link rel="stylesheet" type="text/css"
    href="https://robertsallent.com/css/generic.css">
    </head>
    
  <body>
  
    
    <h1>Actualizar libro</h1>
    
        <menu>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="index.php?controlador=libro/list" class="activo">Lista de libros</a></li>
    <li><a href="index.php?controlador=libro/create">Nuevo libro</a></li>
    </menu>
    <br>
    
    <h2>&nbsp;&nbsp;&nbsp;<?= $libro->titulo?></h2>
    
    <form method = "POST" action ="index.php?controlador=libro/update">
    
    <input type="hidden" name="id" value="<?= $libro->id?>">
    
    <label>ISBN</label>
    <input type="text" name="isbn" value="<?= $libro->isbn?>">
    
    <label>Título</label>
    <input type="text" name="titulo" value="<?= $libro->titulo?>">
    
        <label>Editorial</label>
    <input type="text" name="editorial" value="<?= $libro->editorial?>">
    
        <label>Autor</label>
    <input type="text" name="autor" value="<?= $libro->autor?>">
    
	
	
	<label>Idioma</label>
	
	<select name="idioma">
	
	<option value="" <?= $libro->idioma=='Castellano' ? 'selected' : ''?>>Castellano</option>
	<option value="" <?= $libro->idioma=='Catalán' ? 'selected' : ''?>>Catalán</option>
	<option value="" <?= $libro->idioma=='Inglés' ? 'selected' : ''?>>Inglés</option>
	<option value="" <?= $libro->idioma=='Otros' ? 'selected' : ''?>>Otros</option>
		
	</select>
	
	<br>
	<label>Edición</label>
	<input type="number" min="0" name="edicion" value="<?= $libro->edicion?>">
	
	<br>
	<label>Edad</label>
	<input type="number" min="0" max="99" name="edad" value="<?= $libro->edadrecomendada?>">
	
	<br>
	<input type="submit" class="button" name="actualizar" value="Actualizar">
	<input type="reset" class="button" value="Reset">

    </form>
    
</body>