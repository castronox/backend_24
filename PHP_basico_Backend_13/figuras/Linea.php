<?php   
    

class Linea{
    
    
        # PROPIEDADES----------------------------------------------------
        
        public $p1, $p2;  # La línea se compone de 2 puntos.
        
        
        # CONTRUCTOR ---------------------------------------------------
        
        PUBLIC FUNCTION __CONSTRUCT(Punto $p1, Punto $p2){
            
            $this->p1 = $p1;
            $this->p2 = $p2;
            
        }
        
        # MÉTODOS -------------------------------------------------------
        
        
        
        # Método para mover        
        final public function mover(int $dx, int $dy):Linea{
            
            $this->p1->mover($dx,$dy);
            $this->p2->mover($dx,$dy);
            
            return $this;    
        }
        
        # Método para llevar a origen
        # SE LLEVARA SOLO EL PRIMER PUNTO
        
        public function aOrigen():Linea{
            $this->mover(-$this->p1->x, -$this->p1->y);
            return $this;
        }
        
        
        #Método para calcular la longitud de la línea
        public function longitud():float{
            return $this->p1->distanciaHasta($this->p2);
        }
        # toString
        
        public function __toString():string{
            
            return 'Linea('.$this->p1.', '.$this->p2.')';
        }
                                                   
}                      
?>
