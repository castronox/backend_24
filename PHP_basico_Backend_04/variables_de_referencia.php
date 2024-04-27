<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento PHP</title>
</head>
<body>
    
    <?php

    class Moto
    {

        public $marca, $modelo;

        // Propiedades

        // Constructor
        public function __construct(String $marca = '', String $modelo = '')
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        // Método toString()
        public function __toString()
        {
            return "Moto : $this->marca $this->modelo";
        }
    }

    // Crea una moto, y guarda sue referencia en $moto
    $moto = new Moto('Kawasaki', 'Ninja');
    echo $moto . '<br>';

    $moto->marca = 'Honda';
    echo $moto . '<br>';

    ?>


</body>
</html>