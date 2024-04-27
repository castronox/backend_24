<?php
# Función de la hipotenusa

# fn ( $x , $y ) => sqrt ($x ** 2 + $y ** 2 ) ;
$square = function (float $x) {
    return $x ** 2;
};

# Prueba
echo $square(5); # 25
echo "<br>";

# Función anonima con sintaxis de arrow function
$cuadrado = fn (float $x) => $x ** 2;

# Prueba
echo $cuadrado(8); # 64
echo "<br>";

# La función hipotenusa d
$hipotenusa = fn ($x, $y) => sqrt($x ** 2 + $y ** 2);
echo $hipotenusa(3, 4); # 5

?>
