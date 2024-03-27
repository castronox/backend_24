
    
    <?php   
    #Este fichero es el que tenemos que probar
    #Carga todos los recursos necesarios, conecta, recupera libros
    #Haciendo uso del script y carga la vista que mostrará el listado
    
    
    #Carga la configuracion y el autoload
    include 'config/config.php';
    include 'libraries/autoload.php';
    
    #Ejecuta los scripts de conectar y recuperar libros
    include 'scripts/conectar.php';
    include 'scripts/recuperarLibros.php';
    
    #Carga la vista del listado
    include 'views/booklist.php';
    
    // include 'views/booktable.php'
    
    ?>
