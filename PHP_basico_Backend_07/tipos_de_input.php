<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de input en PHP</title>
</head>
<body>



<form method = "post" autocomplete="off">

    <fieldset>
    
    	<legend>Datos</legend>
    	<label>Usuario:</label>
    	<input type="text" name ="usuario">	
    	<br>
    	
    	
    	<label>Clave:</label>
    	<input type="password" name ="pwd"/>
    	<br/>
    	
    	
    	<input type="radio" name = "sexo" value = "H" checked/>
    	<label>Hombre</label>
    	<br/>
    	
    	
    	<input type="radio" name="sexo" vale = "M"/>
    	<label>Mujer</label>
    	<br/>
    	
    	
    	<select name="provincia">
    	<option value="BAR">Barcelona</option>
    	<option value="GI">Girona</option>
    	</select>
    	
    </fieldset>
    
    
<!------------------------------------------------------------------------->    
    <fieldset>
    <legend>Vehiculo</legend>
    
    	<input type="checkbox" name="bici" value="1"/>
    	<label>Tengo bici</label>
    	<br/>
    	
    	<input type="checkbox" name="moto" value="1"/>
    	<label>Tengo moto</label>
    	<br/>
    	
    	<input type="checkbox" name="checkbox" value="1"/>
    	<label>Tengo coche</label>
    	<br/>
    
    </fieldset>
    
    <input type = "submit" name = "guardar" value="guardar"/>
    <input type= "reset" value="reset"/>


</form>
    
    <?php   
    if (!empty($_POST['guardar'])){  #Si llega formulario.
       
        $conexion = new mysqli('localhost', 'root', '', 'test');
        $conexion->set_charset('utf8');
        
        #Tomamos los valores que llegan        
        $usuario = $_POST['usuario'];
        $password = md5( $_POST['pwd']);
        $sexo = $_POST['sexo'];
        $provincia = $_POST['provincia'];
        
        
        
        #----> Para los checkboxes aplicamos un condicional, para saber si llegan o no.
        
        # Con operador ternario único ---->  ?
        $bicicleta = empty($_POST['bici']) ? 0 : 1 ;
        $moto = empty($_POST['moto']) ? 0 : 1 ;
        
        # Con operador ternario doble ----> ??
        # Aqui si llega el valor pondrá 1 si no por defecto será 0.
        $coche = empty(['coche']) ??  0 ;
        
        
        # Ejecutamos la consulta con los datos de los campos rellenados.
        
        $consulta = "INSERT INTO tabla (usuario, password, sexo, provincia, bici, moto, coche)
                    VALUES ('$usuario','$password','$sexo','$provincia','$bicicleta','$moto','$coche')";
        
        echo $conexion -> query ($consulta) ? 'Guardado OK' : 'Guardado NOK';
    }
    
    ?>


</body>
</html>