<?php
# Esta función recibe 2 numeros

function sumar ($a, $b){
    # Comprueba que los parámetros son numéricos
    if (!is_numeric($a)| !is_numeric($b))
        throw new InvalidArgumentException();
    
        
    return $a + $b; # Retorna la suma 
    
}

# Prueba 

try{
    sumar('patatas','coles'); # Esto producirá un InvaliArgumentException.
    
}catch(Exception $e){
    
    echo "<p>ERROR, Los parámetros no són numericos.</p>";
    
}catch(Exception $e){
    
    echo "<p>ERROR: Sucedió una excepción genérica.</p>";
    
} 