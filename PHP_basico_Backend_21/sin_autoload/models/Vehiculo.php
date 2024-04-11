<?php   

abstract class Vehiculo {
    
    # Propiedades
    public $marca, $modelo;
    
    # Constructor
    
    public function __construct(String $marca, String $modelo){
        
        $this->marca = $marca;
        $this->modelo = $modelo;
        
    }
    
    public abstract function arrancar();
    
    
    public function __toString(){
        return "$this->marca $this->modelo";
    }
}


    
?>
