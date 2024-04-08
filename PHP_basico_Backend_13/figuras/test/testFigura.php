<?php   
# Incluimos Ficheros con las clases 
require_once '../Punto.php';
require_once '../Figura.php';

$f1 = new Figura(new Punto(1,1), new Punto(3,2), new Punto(3,4));
echo $f1.'<br>'; # Figura (1,1),(3,2),(3,4)

$f1->getPunto(2)->aOrigen();
echo $f1.'<br>'; # Figura (1,1),(3,2),(0,0)

$f1->setPunto(new Punto(6,0));
echo $f1.'<br>'; # Figura (1,1),(3,2),(0,0)

$f1->addPunto(new Punto(6,0));
echo $f1.'<br>'; # Figura (1,1),(3,2),(1,5),(6,0)

$f1->removePunto(2);
echo $f1.'<br>'; # Figura (1,1),(3,2),(6,0)
?>
