<?php   


# Incluir los ficheros con las clases  
  
require_once '../Punto.php';
require_once '../Linea.php';

$l1 = new Linea(new Punto(1,1), new Punto(4,5));
echo $l1.'<br>';                                    # Línea (1,1) - (4,5)

echo $l1->mover(2,1). '<br>';                       # Línea (3,2) - (6,6)
echo $l1->aOrigen().'<br>';                         # Línea (0,0) - (3,4)
echo $l1->longitud().'<br>';                        # 5
    
?>
