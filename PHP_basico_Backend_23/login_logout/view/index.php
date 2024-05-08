<?php
    include '../config/config.php';
    include '../libraries/autoload.php';
    
    session_start();
    
    include '../scripts/login.php';
    
    
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
    	<meta charset="UTF-8">
    	<title>LogIN --- LogOUT</title>
    	<link rel="stylesheet" type="text/css"
    		href="https://robertsallent.com/css/generic.css">
    </head>
    
    
    <body>
            <h2 class="centrado">EJEMPLO de login / logout</h2>

            <?php if (Session::has('usuario')){?>
            
            <p>Bienvenido <?= Session::get('usuario')->userName?>,
            <a href='?logout'>Logout</a>
                
            <?php }else{?>
                
                <form method="POST" id="login">
                
                <input type="text" name = "userName" placeholder="userName" required>
                <br>
                <input type="password" name = "password" placeholder="password" required>
                <br>
                <input type="submit" class="button" name = "login" value="logIn">
                
                </form>
            <?php } ?>

    </body>
    </html>