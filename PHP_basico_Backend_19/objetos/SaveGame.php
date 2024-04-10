<?php   
    
class SaveGame{
    
    # Propiedades    
    public $player, $points, $items;
    
    # Constructor (coding style PSR-2)
    public function __construct(
        string $player,
        int $points = 0,
        array $items = []
        ){
        
            $this->player = $player;
            $this->points = $points;
            $this->items = $items;
    }
    
    
    # toString ()
    
    public function __toString(){
        $texto = "SAVE: $this->player, $this->points ";
        $texto .= "ITEMS: [". implode(', ', $this->items)."]";
        return $texto;
    }
    
    
}


?>
