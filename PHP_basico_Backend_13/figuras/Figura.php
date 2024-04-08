<?php   
class Figura{
   
    # PROPIEDADES
    private $puntos;
    
    # CONSTRUCTOR
    public function __canstruct(Punto ...$puntos){
        
        if(count($puntos)>=3)
            $this->puntos=$puntos;
        else 
            throw new Exception('Al menos 3 puntos...');
    }
    
    # Métodos
    
    
    #Método mover
    public function mover (float $dx=0, float $dy=0):Figura{
        
        $this->puntos->mover($dx,$dy);
        return $this;
    }
    
    public function setPunto(Punto $p, int $i=0){
        $this->punto[$i]=$p;
    }
    
    public function addPunto(Punto $p):int{
        $this->puntos[]=$p;
        return counto($this->puntos);
    }
    
    public function removePunto(int $i=0):int{
        if(count($this->puntos)>3)
            array_splice($this->punto,$i,1);
        return count($this->puntos);
    }
    
    # Método perímetro (Por hacer todavia en ejercicios)
    
    public function __toString():string{
        $texto = "Figura: ";
        foreach ($this->puntos as $punto)
            $texto .=$punto;
        return $texto;
    }
    
 }
    
?>
