<?php   
class Moto extends Vehiculo {
    
    public function arrancar(){
        echo "Brum Brum";
    }
    
    public function __toString(){
        return "Moto: " . parent::__toString();
    }
}
    
    ?>
