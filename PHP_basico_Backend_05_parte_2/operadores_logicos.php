<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PHP</title>
</head>
<body>

	<h1>Operadores lógicos</h1>
	
	
	<p>Los operadores lógicos nos permitirán evaluar condiciones complejas, uniendo distintas expresiones para dar un resultado final.</p>
	    
    <?php   
        $mates = 7;
        $fisica= 3;
        
            echo "<p> En mates tienes $mates y en física $fisica.</p>";

            echo "<p> Has aprobado mates y física? ";
            echo $mates >=5  && $fisica >=5 ? 'SI' : 'NO';
            echo "</p>"; 
            
            echo "<p>Has aprobado mates o física? ";
            echo $mates >=5 || $fisica >= 5 ? 'SI' : 'NO';
            echo "</p>";
    ?>
    
    


</body>
</html>