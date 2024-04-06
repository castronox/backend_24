<?php   
  

# Funcion que aplica una funcion a cada elemento de una lista
# Prototipo: void for_each(array &$lista, callable $funcion)

        function for_each(array &$lista, callable $funcion) {
            for ($i = 0; $i < count($lista); $i++){
                $funcion($lista[$i]); #Aplica la funcion a cada elemento del array
            }
        }
    
        
        #PRUEBAS 
        
        $lista = [1,2,3,4,5];
        
        $funcion = function(&$n){
            $n *= 10;
        };
        
        #Aplica la función guardada en $funcion a cada elemento de la lista
        for_each($lista, $funcion);
        
        #Aplica una función que imprime en un párrafo a cada elemento de la lista.
        for_each($lista, function($n){echo "<p>$n</p>"; });
?>
