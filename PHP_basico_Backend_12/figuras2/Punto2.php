<?php   
   

class Punto{
    
    # Constantes de clase 
    
    const ORIGX = 0;
    const ORIGY = 0;
    
    # Propiedades estáticas (de clase)
    public static $puntosCreados = 0;
    
    # Propiedades de objeto
    public $x = 0, $y = 0;
    
    # CONSTRUCTOR
    
    #Los valores por defecto de X e Y serán los indicado en las constantes
    
    public function __construct(float $x=self::ORIGX, float $y=self::ORIGY){
        $this->x=$x;
        $this->x=$y;
        
    #Incrementa la cuenta en puntos
    self::$puntosCreados++;
    }
    
    
    
    # Métodos parsear a String
    public function __toString():string{
        return "($this->x, $this->y)";
    }
    
}
    
?>
