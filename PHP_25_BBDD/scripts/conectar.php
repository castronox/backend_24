
    <?php   
    try{
        $conexion = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    }catch(Exception $e){
        #Si se produce error al conectar...
        die ('Error al conectar a la base de datos.');
    }
    
    ?>
