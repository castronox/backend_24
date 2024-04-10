<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App para guardar y recuperar cuentos PHP</title>
</head>
<body>


<h2>Aplicación que guarda y recupera cuentos mediante ficheros de texto</h2>
    
    <h3>Escribe tu cuento</h3>
    
    <form method="POST" >
    
    <label>Nombre del fichero:</label><br>
    <input type="text" name="nombre" required>
    <label>.txt</label>
    <br>
    <label>Cuento:</label><br>
    <textarea name="cuento" placeholder="Escribe tu cuento aquí"></textarea>
    <br>
    <input type="submit" name="guardar" value="Guardar">
    
    </form>
    


</body>
</html>

<?php   
 # Si llega el cuento....   
if(!empty($_POST['guardar'])){
    
    $directorio = "cuentos";
    
    # Recuperamos los archivos del formulario 
    
    $nombre = $_POST['nombre'];
    $cuento = $_POST['cuento'];
   
    #Abre un fichero para lectura y escribe en el .
    $fichero = fopen("$directorio/$nombre.txt" , 'w');
    
    fwrite($fichero, $cuento);  # Escribe en fichero
    fclose($fichero); # Cierra el fichero
    
    echo "<p>Cuento guardado correctamente.</p>";
}
    ?>
