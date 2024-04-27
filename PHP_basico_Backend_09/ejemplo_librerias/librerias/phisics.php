
    <?php

    # Librería de funciones para calculos de física

    # Cálculo de una posición en MRU
    function posicionMRU(float $velocidad, float $tiempo, float $posicionInicial = 0)
    {
        return $posicionInicial + $velocidad * $tiempo;
    }

    # Cálculo de la velocidad en un MRUA
    function velocidadMRUA(float $aceleracion, float $tiempo, float $velocidadInicial = 0)

    {
        return $velocidadInicial + $aceleracion * $tiempo;
    }

    # Y 200 funciones más...

    ?>
