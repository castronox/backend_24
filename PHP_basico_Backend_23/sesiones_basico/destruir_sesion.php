<?php
$_SESSION = [];  # Borra todas las variables de sesión 

# Recupera los parámetros de la cookie de sesión 
$parametrosCookie = session_get_cookie_params();

setcookie(          # Manda una cookie caducada

  session_name(),                   # Nombre de la cookie
    '',                             # Valor
    time()-3600,                    # Tiempo ( expirada )
    $parametrosCookie['path'],      # Ruta 
    $parametrosCookie['domain'],    # Dominio
    $parametrosCookie['secure'],    # HTTP o HTTPS ?
    $parametrosCookie['httponly']   # Accesible desde JS ?
    
    );

session_destroy();                  # Cierra y elimina el fichero (opcional)
