<?php


try {
    
    # Comenta una de las siguientes instrucciones
    
    //throw new Error();
    throw new Exception();
    
}catch (Error $e){
    
    die (" Se produjo un error.");
    
}catch(Exception $e){
    
    die("Se produjo una excepción");
}
