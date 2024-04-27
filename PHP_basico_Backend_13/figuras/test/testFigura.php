<?php
# Incluimos Ficheros con las clases
require_once '../Punto.php';
require_once '../Figura.php';

$f1 = new Figura(new Punto(0, 1), new Punto(1, 0), new Punto(1, 1), new Punto(1, 1));
echo $f1 . '<br>'; # Figura (1,1),(3,2),(3,4)

$f1->getPunto(2)->aOrigen();
echo $f1 . '<br>'; # Figura (1,1),(3,2),(0,0)

$f1->setPunto(new Punto(1, 0));
echo $f1 . '<br>'; # Figura (1,1),(3,2),(0,0)

$f1->addPunto(new Punto(1, 0));
echo $f1 . '<br>'; # Figura (1,1),(3,2),(1,5),(6,0)

$f1->removePunto(2);
echo $f1 . '<br>'; # Figura (1,1),(3,2),(6,0)

$f1->mover(2, 3);
echo $f1 . '<br>';

$p1 = new Punto(0, 0);
$p2 = new Punto(1, 0);
$p3 = new Punto(1, 1);
$p4 = new Punto(0, 1);

$figura = new Figura($p1, $p2, $p3, $p4);
echo $figura->perimetro();

?>
