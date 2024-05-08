<?php


# Si llega el formulario de login (POST)

if (!empty($_POST['login'])){
    
    # Tomamos los datos
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    
    # Hacer login
    
    $nuevoUsuario = new Usuario ($userName, $password, ['ROLE_USER']);
    Session::set ('usuario', $nuevoUsuario);
    
    
}

# Si piden hacer logOUT ( Mediante enlace por GET)
    
if(isset($_GET['logout'])){
    Session::destroy();                  # Elimina la sesión
    header('Location: index.php');      # Redirección a la portada
    
}

