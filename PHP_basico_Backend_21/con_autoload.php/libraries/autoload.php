<?php   
    

# Funcion usada para buscar las clases
function load(string $clase){
    
    #Para cada directorio de la lista
    foreach (AUTOLOAD_DIRECTORIES as $directorio){
        $ruta = "$directorio/$clase.php";   #Calcula la ruta
        
        if (is_readable($ruta)){            #Si es legible...
            require_once $ruta;             #Carga la clase...
            break;                          # Ahorra iteraciones.
        }
    }
}
    
// Registrar la funcion autoload anterior
spl_autoload_register('load');
    ?>
