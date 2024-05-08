<?php
require_once '../config/config.php';
require_once '../autoload.php';

try{
    
    # Si llega el controlador por URL lo cargará 
    # En caso contrario, cargará pòr defecto el indicado en config.php
    @require '../controllers/' . ($_GET['controlador'] ?? DEFAULT_CONTROLLER). '.php';
}catch(Throwable $e){
    
    $mensaje= $e->getMessage(); #   Prepara el mensaje
    require '../views/error.php';#  Muestra el error
}