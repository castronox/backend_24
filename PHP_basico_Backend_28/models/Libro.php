<?php

#[\AllowDynamicProperties]

class Libro extends Model{
 
    
#-----------------------------------------------------------------------------------   
    # Método que recupera los ejemplares de un libro
    public function getEjemplares():array{
        $consulta = "SELECT * FROM ejemplares WHERE idlibro=$this->id";
        
        # Retorna un lista de Ejemplar
        return DB::selectAll($consulta, 'Ejemplar');
    }
    
#-------------------------------------------------------------------------------------

    # Método que recupera los temas de un libro
    
    public function getTemas():array{
        
        $consulta = "SELECT t.* 
                     FROM temas t
                            INNER JOIN temas_libros tl ON t.id=tl.idtema
                     WHERE tl.idlibro=$this->id";
        
        # Retorna una lista de Temas
        
        return DB::selectAll($consulta, 'Tema');
    }
}