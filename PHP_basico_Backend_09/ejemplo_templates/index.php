<?php  require 'templates/template.php' ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"
    	  href="https://robertsallent.com/css/generic.css"
    <title>Templates en PHP</title>
</head>
<body>
    
    <?php   
    cabecera('Página de contacto', 'Hecha con template');
    menu('con');  #A menú le pasamo la página actual
    migas(['Inicio'=>'index.php', 'Contacto'=>'contacto.php'])    
    ?>
    
    <main>    
    	<h1>Contactar</h1>
    	<p>Esta web esta hecha con un plantilla.</p>
    	<p>Aquí iría el formulario de contacto.</p>
    </main>
    
    <?php pie('Cristian Castro') ?>


</body>
</html>