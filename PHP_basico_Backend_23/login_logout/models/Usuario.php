<?php
#[\AllowDynamicProperties]


class Usuario{
    
    # Propiedades     
    public string $userName;        # Nombre de usuario 
    public string $password;        # Contraseña
    public array  $roles;           # Lista de roles ( para autorización ) 
    
    # Constructor 
    public function __construct(string $userName, string $password, array $roles){
        $this->userName = $userName;
        $this->password = $password;
        $this->roles    = $roles;
    }
    
    # Método que comprueba si un usuario tiene un determinado rol
    public function hasRole(string $role):bool{
        return in_array($role, $this->roles);
    }
    
    
}