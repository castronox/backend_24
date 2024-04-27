<?php
#[\AllowDynamicProperties]


class Libro{
     
    # No indico propiedades ni constructor
    
    # Método para recuperar un array con todos los libros.
    
    # EJEMPLO: $libros = Libro::all();
    
    public static function all():array{
        
        return DB::selectAll("SELECT * FROM libros", self::class);
        
    }
    
    # Método para recuperar un libro a partir de su ID (null si no lo encuentra)
    # EJEMPLO: $libro::find(5);
    
    public static function  find(int $id):?Libro{
        
        $consulta = "SELECT * FROM libros WHERE id=$id";
        return DB::select($consulta, self::class);
    }
    
    
   # Método para guardar un nuevo libro en la BBDD
   # EJEMPLO : $libro->save();
    public function save():int{
        
        # Prepara la consulta e inserción (ojo con las comillas y comas...)
        $consulta= "INSERT INTO libros(
                    isbn, titulo, editorial, idioma, autor, edicion, edadrecomendada
                    )VALUES(
                    '$this->isbn','$this->titulo','$this->editorial','$this->idioma',
                    '$this->autor',$this->edicion,$this->edadrecomendada)";
        
        #Guarda el nuevo libro en la BBDD y actualiza su id con el autonumerico        
        $this->id = DB::insert($consulta);
        
        # Retorna el id del nuevo libro (o 0 si no hay campo autoincremental)
        return $this->id;   
    }
    
    
    
    # Método que actualizará un libro en la base de datos
    # EJEMPLO: $libro->update();
    
    public function update():int{
        
        # Prepara una consulta ( ojo con las comillas y las comas )
        
        $consulta = "UPDATE libros SET

        isbn                   =       '$this->isbn',
        titulo                 =      '$this->titulo',
        editorial              =      '$this->editorial',
        idioma                 =      '$this->idioma',
        autor                  =      '$this->autor',
        edicion                =      '$this->edicion',
        edadrecomendada        =      '$this->edadrecomendada'

                     WHERE id  =       $this->id";
   
    return DB::update($consulta);     
        
    }
    
    # Método estático que borra un libro de la base de datos
    # EJEMPLO: Libro::delete(5);
    
    public static function delete (int $id):int{
        
        $consulta = "DELETE FROM libros WHERE id = $id";
        
        return DB::delete($consulta);
    }
    
    # Método de objeto que borra un libro de la base de datos
    # EJEMPLO: $libro->deleteObject();
    
    public function  deleteobject():int{
        
        $consulta = "DELETE FROM libros WHERE id = $this->id";
        
        return DB::delete($consulta);
    }
    
    
    # Método que realiza consultas de totales
    # EJEMPLO: Libro::total('AVG', 'ediciones');
    
    public static function total (
        string $operacion = 'COUNT',    # Calculo a realizar
        string $campo = '*'             # Campo sobre el que realizar el cálculo
        ){
        
          return DB::total('libros', $operacion, $campo);             
    }
    
    
    # El método __toString(), lo usaremos principalmente en test
    public function __toString():string{
        
        return "LIBRO  $this->id: $this->isbn - $this->titulo, de $this->autor";
    }
    
}