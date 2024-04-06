<?php   
#Clase Coche
class Coche {
    
    #Propiedades
    

    
    # Constructor
    
    public function __construct
    
    (
        public string $marca,
        public string $modelo,
        public int    $kms=0
    ){}
    
    
    # Método avanzar
    
    public function avanzar (int $kms = 0){
        $this->kms = $kms;
    }
    
    # Método toString();
    
    public function __toString(){
        return "COCHE: $this->marca $this->modelo, $this->kms kms";
    }
    
}

    
?>
