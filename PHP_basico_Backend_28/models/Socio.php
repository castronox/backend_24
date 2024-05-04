<?php
#[\AllowDynamicProperties]
class Socio extends Model {
    
    # Metodo que recupera los prestamos de un socio
    
    public function getPrestamos():array{
        
        $consulta = "SELECT * FROM prestamos WHERE idejemplar=$this->id";
        
        return DB::selectAll($consulta, 'Prestamo');
    }
}