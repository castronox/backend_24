<?php
#[\AllowDynamicProperties()]
class Ejemplar extends Model{
    
    # Como la tabla no se llama ejemplars si no ejemplares...
    
    protected static string $table = 'ejemplares';
}