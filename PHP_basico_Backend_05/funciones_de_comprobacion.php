<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de comprobación en PHP</title>
</head>
<body>
		
		<h1>isset(), empty() y unset()</h1>
			
			<ul>
				<li>isset() comprueba si una variable existe.</li>
				<li>empty() retorna true si no existe o su valor equivale a false.</li>
				<li>unset() destruye una variable.</li>
			</ul>
		
		   
    			<?php   
    
    			$variable = 10; // variable existe y no está vacía
    			
    			echo isset($variable) ? "<p>SI</p>" : "<p>no</p>"; // SI
    			echo empty($variable) ? "<p>SI</p>" : "<p>no</p>"; // NO
    			
    			
    			$variable = 0; // variable existe pero está vacía
    			
    			echo isset($variable) ? "<p>SI</p>" : "<p>no</p>"; // SI
    			echo empty($variable) ? "<p>SI</p>" : "<p>no</p>"; // SI
    			
    			unset($variable);
    			
    			echo isset($variable) ? "<p>SI</p>" : "<p>no</p>"; // NO
    			echo empty($variable) ? "<p>SI</p>" : "<p>no</p>"; // SI
    
                    ?>


</body>
</html>