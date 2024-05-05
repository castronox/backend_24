<?php

try {
    # Comenta una de las siguientes instrucciones
    
    //throw new Error ("Se produjo un error.");
    
    throw new Exception ("Se produjo una excepción");
    
}catch (Throwable $e){
    die($e->getMessage());
}
