<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para socios de biblioteca en PHP</title>
</head>
<body>

<h1>Formulario para introducir socios en la base de datos</h1>

<form method="post" autocomplete = "off">

<fieldset>
	<legend>Introducir nuevo socio</legend>
	
	<label>Dni:</label>
	<br/>
	<input type="text" name="dni" required maxlength="9"/>
	<br/><br/>
	
	<label>Nombre:</label>
	<br/>
	<input type="text" name="nombre" />
	<br/><br/>
	
	<label>Apellidos</label>
	<br/>
	<input type="text" name="apellidos" />
	<br/><br/>
	
	<label>Fecha de nacimiento</label>
	<br/>
	<input type="date" name="nacimiento" />
	<br/><br/>
	
	<label>Email</label>
	<br/>
	<input type="email" name="email" required />
	<br/><br/>
	
	<label>Teléfono</label>
	<br/>
	<input type="number" name="telefono" maxlength="16" />
	<br/><br/>
	
	<label>Dirección</label>
	<br/>
	<input type="text" name="direccion" />
	<br/><br/>
	
	<label>Código Postal</label>
	<br/>
	<input type="number" name="cp" maxlength="5" />
	<br/><br/>
	
	<label>Población</label>
	<br/>
	<input type="text" name="poblacion" />
	<br/><br/>
	
	<label>Provincia</label>
	<br/>
	<input type="text" name="provincia" />
	<br/><br/>
	
	<input type ="submit" name="guardar" value ="guardar" />

</fieldset>

</form> 


    
    <?php   
    if(!empty($_POST['guardar'])){   #Si llegan datos
        
        $conexion = new mysqli('localhost', 'root', '', 'biblioteca');
        $conexion->set_charset('utf8');
        
        
        //Recuperación de datos.
        $dni          = $_POST          ['dni'];
        $nombre       = $_POST       ['nombre'];
        $apellidos    = $_POST    ['apellidos'];
        $nacimiento   = $_POST   ['nacimiento'];
        $email        = $_POST        ['email'];
        $telefono     = $_POST     ['telefono'];
        $direccion    = $_POST    ['direccion'];
        $cp           = $_POST           ['cp'];
        $poblacion    = $_POST    ['poblacion'];
        $provincia    = $_POST    ['provincia'];
        
        
        $consulta = 
        "INSERT INTO socios(dni ,nombre ,apellidos ,nacimiento ,email ,direccion ,cp ,poblacion ,provincia ,telefono )
         VALUES ('$dni','$nombre','$apellidos','$nacimiento','$email','$direccion','$cp','$poblacion','$provincia','$telefono')";
        #QUITA LAS COMILLAS DE LOS CAMPOS GUARDADOS QUE NO SEAN STRING
        
        echo $conexion -> query ($consulta) ? 'Guardado OK' : 'Guardado NOK';
    }
    
    ?>


</body>
</html>