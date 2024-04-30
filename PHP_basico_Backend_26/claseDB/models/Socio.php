<?php
#[\AllowDynamicProperties]
class
Socio{
        
    # No se indica propiedades ni constructor
    
    
#----------------------------------------------------------------------------  

    
    # Método para recuperar un array con todos los Socios
    
    # Ejemplo: $socios = Socio::all();   

    public static function all(): array{
        return DB::selectAll("SELECT * FROM socios", self::class);
    }
    
    

#----------------------------------------------------------------------------    
   
    # Método para recuperar un Socio a partir de su ID (NULL si no lo encuentra.)    

    # Ejemplo : $socio::find(6);

    public static function find(int $id): ?Socio{
        
        $consulta = "SELECT * FROM socios WHERE id=$id";
        return DB::select($consulta,self::class);

    }
    
    
#-----------------------------------------------------------------------------

    
    # Método para guardar un socio en la base de datos
 
    # Ejemplo: $socio->save();
    
    public function save():int{
        
        #Preparamos la consulta de inserción:
        $consulta = "INSERT INTO socios(
                    dni,
                    nombre,
                    apellidos,
                    nacimiento,
                    email,
                    direccion,
                    cp,
                    poblacion,
                    provincia,
                    telefono,
                    foto                   
                     )VALUES(
                    '$this->dni',
                    '$this->nombre',
                    '$this->apellidos',
                    '$this->nacimiento',
                    '$this->email',
                    '$this->direccion',
                    '$this->cp',
                    '$this->poblacion',
                    '$this->provincia',
                    '$this->telefono',
                    '$this->foto'                     
                     )";
        # Guardamos nuevo socio y actualizamos el id con el autonumérico.
        $this->id = DB::insert($consulta);
        
        # Retornamos el id del nuevo Socio (o 0 si no hay un autoincremental).
        return $this->id;
    }
    
    
    
#------------------------------------------------------------------------------   
        

        # Método que actualizara un socio en la base de datos.
        
        # EJEMPLO: Socio::update();

    public function update():int {
       
        # Prepara una consulta ( OJO con las comillas y las comas)
        $consulta = "UPDATE socios SET

        dni         =       '$this->dni',
        nombre      =       '$this->nombre',
        apellidos   =       '$this->apellidos',
        nacimiento  =       '$this->nacimiento',
        email       =       '$this->email',
        direccion   =       '$this->direccion',
        cp          =       '$this->cp',
        poblacion   =       '$this->poblacion',
        provincia   =       '$this->provincia',
        telefono    =       '$this->telefono',
        foto        =       '$this->foto'

           WHERE id =        $this->id";
        
        return DB::update($consulta);
        
    }

    
#-------------------------------------------------------------------------------    
    
    # Método estático que borra un socio de la base de datos 
    
    # EJEMPLO : Socio::delete(5);
    
    public static function delete(int $id): int{
        
        $consulta = "DELETE FROM socios WHERE id = $id";
        
        return DB::delete($consulta);
    }

#-------------------------------------------------------------------------------    
    
    # Método de objeto que borra un socio de la base de datos 
    
    # EJEMPLO: $socio->deleteObject();
    
    public function deleteObject(): int{
        
        $consulta = "DELETE FROM socios WHERE id = $this->id";
        
        return DB::delete($consulta);
    }
    
#------------------------------------------------------------------------------- 
    
    # Método que realiza consultas de totales
    
    # EJEMPLO: Socio::total('AVG','socios');
    
    public static function total (string $operacion = 'COUNT', # Calculo a realizar
        string $campo = '*'){ # Campo sobre el que realizar un cálculo.
    
      return DB::total('socios', $operacion, $campo);  
    }
    
#---------------------------------------------------------------------------------
    
    # Método de busqueda y orden
    
    # Ejemplo: Socio::getFiltered('nombre', 'apellidos','nacimiento' 'ASC');
    
    public static function getFiltered(
        
        string $campo   = 'nombre',         # Campo con el que filtrara.
        string $valor   = '' ,              # Aquí introducimos el valor que el usuario busque.
        string $orden   = 'nacimiento',     # Campo para el orden por ID.
        string $entido  = 'ASC',            # Sentido ascendente de la orientación por defecto.
        
        ):array{
        
            $consulta = "SELECT * FROM socios WHERE $campo LIKE '%$valor%' ORDER BY $orden $entido";
            
            return DB::selectAll($consulta, self::class);
    }
    
    
  
#---------------------------------------------------------------------------------

#---------------------------------------------------------------------------------
    
    # Método __toString(), se utiliza principalmente en el test
    
    public function __toString(): string{
        
        return "SOCIO $this->id:  $this->nombre $this->apellidos, vive en: $this->direccion";
    }
#------------------------------------------------------------------------------------

    # FIN DE LA CLASE
}