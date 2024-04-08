<?php 

# Incluimos los ficheros para trabajar con las clases.

require_once '../Punto.php';
require_once '../Circulo.php';

$c1 = new Circulo(new Punto(2,2),5);
echo $c1.'<br>';                                        # Imprime circulo (2,2) r:5

echo $c1->aOrigen()->mover(3,3).'<br>';                 # (3,3) r:5

echo "El área es: ".$c1->area()."<br>";                 # 78.5
echo "El perímetro es: ".$c1->perimetro()."<br>";       # 31.4


    
?>
