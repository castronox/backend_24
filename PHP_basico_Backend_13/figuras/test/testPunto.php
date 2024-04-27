<?php
# Incluimos el fichero con la clase
require_once '../Punto.php';

$punto1 = new Punto(0, 1); # Creamos un nuevo punto
echo $punto1 . "<br>"; # Imprime el punto (0,1)

echo $punto1->aOrigen() . '<br>'; # 0,0
echo $punto1->mover(5, 10) . '<br>'; # 5,10

$punto2 = new Punto(10); # Crea el punto (10,0)

echo $punto1->distanciaHasta($punto2) . '<br>'; # 11.18
echo $punto2->distanciaHasta($punto1) . '<br>'; # 11.18
echo $punto1->distanciaHasta($punto1) . '<br>'; # 0
echo $punto1->distanciaHasta(new Punto(5, 5)) . '<br>'; # 5

echo Punto::distanciaEntre($punto1, $punto2) . '<br>'; # 11.18

?>
