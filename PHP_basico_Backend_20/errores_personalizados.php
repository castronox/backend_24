<?php
class InfiniteError extends DivisionByZeroError{}


# Function que divide entre $a  y $ b

function dividir(float $a, float $b):float {
    
    if ($b == 0)
        throw new InfiniteError("Resultado infinito");
    
        
        return $a / $b;
}

# Pruebas

try {
    dividir(3,0);
    
    
} catch (InfiniteError $e) {

echo "<p>ERROR: " . $e->getMessage() . "</p>";

}