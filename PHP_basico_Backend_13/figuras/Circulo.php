<?php

class Circulo
{

    # PROPIEDADES -------------------------------------------------------------------
    public $centro;

    # Será el tipo de punto. || Implementación de la asociación.
    public $radio;

    # CONSTRUCTOR -------------------------------------------------------------------
    public function __construct(Punto $p, float $radio)
    {
        $this->centro = $p;
        $this->radio = $radio;
    }

    # MÉTODO ------------------------------------------------------------------------

    # Desplaza un CIRCULO ( Mueve su centro ).
    public function mover(float $dx = 0, float $dy = 0): Circulo
    {
        $this->centro->mover($dx, $dy);
        return $this;
    }

    # Lleva un circulo al origen de las coordenadas.
    public function aOrigen(): Circulo
    {
        $this->centro->aOrigen();
        return $this;
    }

    public function area(): float
    {
        return pi() * $this->radio * $this->radio;
    }

    public function perimetro(): float
    {
        return 2 * pi() * $this->radio;
    }

    # Método toString()
    public function __toString(): string
    {
        return $this->centro . ' radio: ' . $this->radio;
    }
}

?>
