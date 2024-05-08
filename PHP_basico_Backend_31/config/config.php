 <?php

// FICHERO config.php

// PARÁMETROS DE CONFIGURACIÓN DEL AUTOLOAD
define('AUTOLOAD_DIRECTORIES', [
    '../models',
    '../libraries',
    '../exceptions',
    '../interfaces'
]);

// PARÁMETROS DE CONFIGURACION DE LA BDD
define('DB_HOST', 'localhost'); // host
define('DB_USER', 'root'); // usuario
define('DB_PASS', ''); // password
define('DB_NAME', 'biblioteca'); // base de datos
define('DB_PORT', 3306); // puerto
define('DB_CHARSET', 'utf8'); // codificación

// OTROS PARAMETROS
define('DEBUG', true); // para depuración

define('DB_CLASS','DB');
define('SGDB','mysql');
    
define('DEFAULT_CONTROLLER', 'welcome' );
    
    