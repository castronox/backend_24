<?php 
#Ruta del fichero en la carpeta temporal
$ruta = $_FILES ['fichero'] ['tmp_name'];

#Forma orientada a OBJETO

$finfo = new finfo(FILEINFO_MIME_TYPE);         #Crea un objeto finfo
$tipoMime = $finfo->file($ruta);                 # Recupera el tipo MIME

echo "<p>El tipo MIME del fichero es $tipoMime.</p>";

# Para comparar podemos usar expresiones Regulares
# Comprobar si es de Imagen ( comienza por image/):

echo preg_match("/^image\//", $tipoMime) ? 
"<p> Es una imagen. </p>" : "<p> No es una Imagen.</p>";

# Comprobar si es mp4 o mpeg.</p>
echo preg_match("/^video\/(mp4|mpeg)$/", $tipoMime) ? 
"<p> Es un video MP4 o jpeg.</p>" : "No es un video con el formato adecuado."; 

# Comprobar si es csv o pdf (Tipos Concretos)

echo preg_match("/^(text\/csv|application\/pdf)$/", $tipoMime) ? 
"<p> Es csv o pdf. </p>" : "<p>No es ni csv ni PDF. </p>"





?>