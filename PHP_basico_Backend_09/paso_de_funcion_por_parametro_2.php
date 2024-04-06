<?php   

#Funcion que ejecuta funciones que se le pasan

#Prototipo: VOID  ejecutar([callable $...]);
function ejecutar(callable ...$funciones){
    foreach ($funciones as $f)
        $f();
}

#Probamos a pasar directamente las funciones.

ejecutar(function() {echo "Hola ";} , 
         function() {echo "Mundo";} );
    
?>


