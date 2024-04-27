<?php

# Obtenemos los ficheros múltiples recorriendo un array

# 1- La primera clave es el nombre del input
# 2- La segunda el campo que queremos recuperar
# 3- El tercer indice se corresponde con el fichero (0,1,2...)
foreach ($_FILES['ficheros']['error'] as $indice => $error) {

    if (! $error) { # Si no hay error

        $nombre = $_FILES['ficheros']['name'][$indice];
        $rutaTemporal = $_FILES['ficheros']['tmp_name'][$indice];
        $rutaFinal = "files/$nombre";

        echo move_uploaded_file($rutaTemporal, $rutaFinal) ? "<p> Fichero : $nombre subido correctamente </p>" : "<p> Error en la escritura del fichero en el directorio, Nombre fichero ($nombre).</p>";
    } else # Si hay error
        echo "<p> ERROR, código $error";
}

?>
