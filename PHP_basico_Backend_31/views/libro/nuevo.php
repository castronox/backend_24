<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Introducir nuevo libro</title>
<link rel="stylesheet" type="text/css"
    href="https://robertsallent.com/css/generic.css">
    </head>
    
  <body>
  
    
    <h1>Crear nuevo libro</h1>
    
        <menu>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="index.php?controlador=libro/list" class="activo">Lista de libros</a></li>
    <li><a href="index.php?controlador=libro/create">Nuevo libro</a></li>
    </menu>
    <br>
    
    <form method ="post" action="index.php?controlador=libro/store">
    
    	<label>ISBN</label>
    <input type="text" name="isbn">
    <br>
    
        <label>Título</label>
    <input type="text" name="titulo">
    <br>
    
        <label>Editorial</label>
    <input type="text" name="editorial">
    <br>
    
        <label>Autor</label>
    <input type="text" name="autor">
    <br>
    
    	<label>Idioma</label>
    	<select name="idioma">
    		<option value="castellano">Castellano</option>
    		<option value="catalan">Catalán</option>
    		<option value="otros">Otros</option>
    		
    		
    	</select>
    <br>
    
            <label>Edición</label>
    <input type="number" name="edicion" min="0">
    <br>
            <label>Edad</label>
    <input type="number" min="0" max="99" name="edadrecomendada">
    <br>
    
           
    <input type="submit" class="button" name="guardar" value = "Guardar">
    <br>
    
    </form>
    
    <div class="centrado">
    
    <a class = "button" href="index.php?controlador=libro/list">Lista de libros</a>
    
    </div>
    
  </body>