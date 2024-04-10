<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App para guardar y recuperar cuentos PHP</title>
</head>
<body>


<h1> Lectura de cuentos</h1>

<form method = "post">

<label>Selecciona el cuento:</label>
<select name="cuento"></select>


</form>


</body>
</html>


<?php 
$directorio = 'cuentos';
 # Recupera los ficheros del directorio
 $archivos = scandir($directorio);
 $cuentos = [];
 
 # Mete el array en los cuentos de fichero .txt
 
 foreach ($archivos as $a)
     if(preg_match('/\.txt$/i', $a))
         $cuentos[]=$a;
     
         # Ordena los fichero txt alfabéticamente
         sort($cuentos);
         
?>


