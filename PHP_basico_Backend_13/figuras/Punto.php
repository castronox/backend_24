<?php

class Punto
{

    # Propiedades ---------------------------------------
    public $x, $y;

    # Constructor (Para construir objetos
    public function __construct(float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    # MÉTODOS ------------------------------------------

    # Desplaza un punto
    public function mover(float $dx = 0, $dy = 0): Punto
    {
        $this->x = $dx;
        $this->y = $dy;

        return $this;
    }

    # Lleva un punto al origen de las coordenadas
    public function aOrigen(): Punto
    {
        $this->x = 0;
        $this->y = 0;

        return $this;
    }

    # Método DE OBJETO para calcular la distancia entre 2 Puntos
    public function distanciaHasta(Punto $p): float
    {
        return self::distanciaEntre($this, $p);
    }

    # Método DE CLASE para calcular la distancia entre dos puntos
    public static function distanciaEntre(Punto $p1, Punto $p2): float
    {
        return hypot($p1->x - $p2->x, $p1->y - $p2->y);
    }

    # Devuelve la REPRESENTACIÓN del punto a modo de STRING
    public function __toString(): string
    {
        return "$this->x, $this->y";
    }
}
?>

 
 
 
 