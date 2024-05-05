<?php

function dividir (float $a, float $b):float{
    # Comprueba que el segundo valor sea 0.
    
    if (!$b)
        
        throw new DivisionByZeroError();
    
        return $a / $b ;
        
}

# PRUEBAS (Comenta y descomenta las líneas.)

try{
    dividir('patatas', 'coles'); # Esto producira un type error
}catch(TypeError $e){
    echo "<p>ERROR: Division por 0.</p>";
}catch(Error $e){
    
    echo "<p>ERROR: Otro error diferente: " . $e->getMeassage() . "</p>";
    
}catch(Error $e){
    echo "<p>ERROR: otro error diferente:" .$e->getMessage(). "</p>";
}