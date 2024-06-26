<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento PHP</title>
</head>
<body>

	<h1>Operadores lógicos</h1>


	<p>Los operadores lógicos nos permitirán evaluar condiciones complejas,
		uniendo distintas expresiones para dar un resultado final.</p>
	    
            <?php
            $mates = 7;
            $fisica = 3;

            echo "<p> En mates tienes $mates y en física $fisica.</p>";

            echo "<p> Has aprobado mates y física? ";
            echo $mates >= 5 && $fisica >= 5 ? 'SI' : 'NO';
            echo "</p>";

            echo "<p>Has aprobado mates o física? ";
            echo $mates >= 5 || $fisica >= 5 ? 'SI' : 'NO';
            echo "</p>";
            ?>
    
    
    <h1>Operadores AND OR y XOR</h1>

	<p>Tienen menor presencia que los operadores && y || , así que habrá
		que considerar el uso del paréntesis si lo usamos.</p>
    
            <?php

            $mates = 2;
            $fisica = 8;

            echo "<p> En mates tienes $mates y en física tienes $fisica.</p>";

            echo "<p>Has aprovado mates y física? ";
            echo ($mates >= 5 and $fisica >= 5) ? 'SI' : 'NO';
            echo "</p>";

            echo "<p>Has aprovado mates o física? ";
            echo ($mates >= 5 or $fisica >= 5) ? 'SI' : 'NO';
            echo "</p>";
            ?>
           
           
     <h1>Operador @</h1>
	<p>Es un operador para el contro de errores</p>    
	
			
			<?php

// Generará un WARNING!
include 'noexsiste.php';
echo "<br>";

// Ignorará el warning
@include 'noexsiste.php';
echo "<br>";

?>        
    


</body>
</html>