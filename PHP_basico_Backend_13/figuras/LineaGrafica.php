<?php

class LineaGrafica extends Linea
{

    # CONSTANTES DE CLASE
    const SOLID = 0;

    const DASHED = 1;

    const DOTTED = 2;

    # PROPIEDADES
    public $color, $estilo;

    # CONSTRUCTOR
    public function __construct(Punto $p1, Punto $p2, $c = 'black', $e = self::SOLID)
    {
        parent::__construct($p1, $p2);
        $this->color = $c;
        $this->estilo = $e;
    }

    # MÉTODOS
    public function dibujar()
    {
        echo "Dibujando..."; # Simulado
    }

    public function __toString(): string
    {
        return parent::__toString() . " c: $this->color e: $this-estilo";
    }
}

?>
