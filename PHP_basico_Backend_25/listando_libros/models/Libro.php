<?php


class Libro
{
    #No indicaré propiedades, las creará dinámicamente el método fetch_object()
    #a partir de los campos recuperados de la consulta
    
    #No indicaré el constructor , da problemas con fetch_object()
    
    #Implementaré el método toString() solamente para demostrar que funciona
    public function __toString(){
        return "$this->titulo, de $this->autor. Editorial $this->editorial.";
    }
}

