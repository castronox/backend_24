<?php   

# Incluimos los ficheros de las clases
  require_once '../Punto.php';
  require_once '../Linea.php';
  require_once '../LineaGrafica.php'; 
  
  $p1 = new Punto (1,1);
  $p2 = new Punto (2,2);
  $l1 = new LineaGrafica($p1, $p2, 'red', LineaGrafica::DOTTED);
  echo $l1.'<br>'; # Linea: (1,1) (2,2)
  
  $l1->dibujar().'<br>';
  
  # Dispone de los métodos heredados de Línea
  echo $l1->mover(100,200);     # Línea : (101,201) (102,202) red 2
    ?>

