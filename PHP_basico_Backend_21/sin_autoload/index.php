<?php   
    
# Carga los ficheros con las clases
require_once 'models/Vehiculo.php';
require_once 'models/Moto.php';
require_once 'models/Coche.php';


# Crea una moto


$moto = new Moto('Honda', 'x2');
echo  "<p>Se ha creatdo $moto. <p>";

$moto->arrancar();

#Crea un coche

$coche = new Coche('toyota', 'yaris');
echo "<p>Se ha creado $coche.</p>";

$coche->arrancar();


    
    ?>
