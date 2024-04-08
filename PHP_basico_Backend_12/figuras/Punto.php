<?php   
    
   #Definición de la clase Punto 
   
class Punto{
    
    # Propiedades
    
    public int $x = 0; // coordenada X
    public int $y = 0; // coordenada Y
    
    # Métodos
    
    # El método toString() devuelve un representación del objeto como texto.
    
    public function __toString():string{
        return "($this->x, $this->y)";
    }
    
} #Fin de la clase PUNTO
?>
