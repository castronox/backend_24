<?php   
class Figura{
   
    # PROPIEDADES
    private $puntos;
    
    # CONSTRUCTOR
    public function __construct(Punto ...$puntos){
        
        if(count($puntos)>=3)
            $this->puntos=$puntos;
        else 
            throw new Exception('Al menos 3 puntos...');
    }
    
    # Métodos
    public function getPunto(int $i=0):Punto{
        return $this->puntos[$i];
    }
    
    #Método mover
    public function mover(float $dx = 0, float $dy = 0): Figura {
        foreach ($this->puntos as $punto) {
            $punto->mover($dx, $dy);
        }
        
        return $this;
    }
    
    public function setPunto(Punto $p, int $i=0){
        $this->puntos[$i]=$p;
    }
    
    public function addPunto(Punto $p):int{
        $this->puntos[]=$p;
        return count($this->puntos);
    }
    
    public function removePunto(int $i=0):int{
        if(count($this->puntos)>3)
            array_splice($this->puntos,$i,1);
        return count($this->puntos);
    }
    
    # Método perímetro (Por hacer todavia en ejercicios)
    

    
    public function perimetro(): float {
        $perimetro = 0;
        
        for ($i = 0; $i < count($this->puntos); $i++) {
            
            $puntoActual = $this->puntos[$i];
            
            $puntoSiguiente = $this->puntos[($i + 1) % count($this->puntos)];
            
            $perimetro += $puntoActual->distanciaHasta($puntoSiguiente);
        }
        
        return $perimetro;
    }
    
    public function __toString():string{
        $texto = "Figura: ";
        foreach ($this->puntos as $punto)
            $texto .=$punto;
        return $texto;
    }
    
 }
    
?>
