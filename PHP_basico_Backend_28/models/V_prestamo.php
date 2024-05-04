<?php

#[\AllowDynamicProperties]
# Clase V_prestamo
# Para trabajar con información de prestamos ampliada.
class V_prestamo extends Model{
    
    public static function isNull():array{
        
        $consulta = "SELECT * FROM v_prestamos WHERE devolucion IS NULL";
        
        return DB::selectAll($consulta, 'V_prestamo');
        
    }
}