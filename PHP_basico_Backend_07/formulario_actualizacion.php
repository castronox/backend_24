<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de actualización en PHP</title>
</head>
<body>
    <h1> Formulario de actualización en PHP</h1>
    
    <?php   
    # Objeto genérico con los datos de un usuario
    #Simula un usuario recuperado de la base de datos
    
    $usuario = new stdClass();
    
    $usuario->nombre = 'Pepe';
    $usuario->sexo = 'H';
    $usuario->provincia = 'GI';
    $usuario->bici = 1;
    $usuario->moto = 0;    
    ?>
    
    <form method="post" autocomplete="off">
    
    <fieldset>
    	<legend>Datos</legend>
    	
    	    <!-- Para los inpuuts, imprimiremos en el value -->
    		<label>Nombre:</label>
    		<input type ="text" name="usuario" value="<?= $usuario ->nombre ?>" />
    		
    		<br/>
    		
    		
    		      <!-- Para los inputs "radio", imprimiremos "checked" en el que corresponda -->
    		      <input type = "radio" name ="sexo" value="H" <?= $usuario -> sexo =='H' ? 'checked' : '' ?> />
    		      <label>Hombre</label>
    		      
    		      <input type = "radio" name ="sexo" value="M" <?= $usuario -> sexo =='M' ? 'checked' : '' ?> />
    		      <label>Mujer</label>
    		      
    		      <br/>
    		      
    		      
    		      <!-- Para los desplegables, imprimiremos "selected" en el que corresponda -->
    		      
    		      <select name="provincia">    		      
    		      	<option <?= $u -> provincia == 'BAR' ? 'selected' : ''?>
    		      			value="BAR">Barcelona</option>
    		      			
    		        <option <?= $u -> provincia == 'GI' ? 'selected' : ''?>
    		      			value="GI">Girona</option>    
    		      </select>   
    </fieldset>
    
    
    
    </form>


</body>
</html>