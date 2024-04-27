<?php

class Punto
{

    # Propiedades estáticas (de clase)
    public static $puntoscreados = 0;

    # Propiedades del objeto
    public $x = 0;

    public $y = 0;

    # Propiedades
    # No hace falta inicializarlas, ya lo hará el constructor.

    # public int $x; #Coordenada X
    # public int $y; #Coordenada Y

    # Constructor
    # Crea un punto a partir de dos coordenada (Opcionales).
    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;

        # Incrementa la cuenta de puntos
        self::$puntoscreados ++;
    }

    # Métodos
    public function __toString(): string
    {
        return "($this->x, $this->y)";
    }

    # Método estático que devuelve la distancia entre dos puntos
    public static function distanciaentre(Punto $p1, Punto $p2): float
    {
        return hypot($p1->x - $p2->x, $p1->y - $p2->y);
    }

    # Método de objeto que devuelve la distancia de un punto a otro
    public function distanciaHasta(Punto $p): float
    {
        return hypot($this->x - $p->x, $this->y - $p->y);
    }

    # Método de objeto para desplazar 1 punto (Pág 37)
    public function mover(float $dx = 0, float $dy = 0): Punto
    {
        $this->x += $dx;
        $this->y += $dy;

        return $this;
    }

    # Método de objeto para llevar un Punto
    public function aOrigen(): Punto
    {
        $this->x = 0;
        $this->y = 0;

        return $this;
    }
}

?>