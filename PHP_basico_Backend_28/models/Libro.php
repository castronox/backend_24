<?php

#[\AllowDynamicProperties]

class Libro extends Model{
    
    # Método que recupera los ejemplares de un libro
    public function getEjemplares():array{
        $consulta = "SELECT * FROM ejemplares WHERE idlibro=$this->id";
        
        # Retorna un lista de Ejemplar
        return DB::selectAll($consulta, 'Ejemplar');
    }
}