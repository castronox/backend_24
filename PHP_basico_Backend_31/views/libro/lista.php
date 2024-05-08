<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lista de libros</title>
<link rel="stylesheet" type="text/css"
    href="https://robertsallent.com/css/generic.css">
    </head>
    
    
    <body>
    <h1 >Libros de la BIBLIOTECA</h1>
    
    <menu>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="index.php?controlador=libro/list" class="activo">Lista de libros</a></li>
    <li><a href="index.php?controlador=libro/create">Nuevo libro</a></li>
    </menu>
    
    <h2>Lista de libros</h2>
    
    <table class="bloqueCentrado w100">
    
    <tr>
    	<th>Título</th><th>Autor</th><th>Ediorial</th><th>Operaciones</th>
    </tr>
    <?php foreach($libros as $libro){?>
         <tr>
            	<td><?=$libro->titulo?></td>
            	<td><?=$libro->autor?></td>
            	<td><?=$libro->editorial?></td>
            
            <td>
            	<a href='index.php?controlador=libro/show&id=<?=$libro->id?>'>Ver</a>
            	<a href='index.php?controlador=libro/edit&id=<?=$libro->id?>'>Editar</a>
            	<a href='index.php?controlador=libro/delete&id=<?=$libro->id?>'>Borrar</a>
            </td>            
         </tr>
         <?php }?>
     </table>
    </body>
</html>