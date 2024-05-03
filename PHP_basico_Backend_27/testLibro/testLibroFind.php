<?php
require_once '../config/config.php';        # Cargamos fichero de configuración
require_once '../autoload.php';             # Cargamos el Autoload
?>


<h2>Recupera una entidad por ID o lanza NotFoundException</h2>
<p>Usamos el método estático <code>findOrFail()</code>.</p>

<p>Es obligatorio pasarle el identificador de la entidad a buscar.</p>
<p>Recuperamos un libro existente e intentaremos recuperar otro que no,
para evitar que el programa se detenga, trataremos la excepción.</p>

<?php

try{
    
    $libro = Libro::findOrFail(3);
    echo "<p>$libro</p>";
    $libro = Libro::findOrFail(1000);
    
}catch(NotFoundException $e){    
    echo "<p>Se produjo una NotFoundException</p>";
}

?>
