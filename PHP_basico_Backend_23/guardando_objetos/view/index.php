<?php 
include_once '../config/config.php';
include_once '../autoload.php';
?>

<h2>Guardar, recuperar y olvidar</h2>

<p> Recuperando una variable de sesión "curso":
<b><?= Session::get('curso') ?? "No existe" ?></b></p>

<p> Guardando una variable de sesión "curso":</p>
<?php Session::set('curso', 'Aplicaciones web');?>

<p> Recuperando una variable de sesión "curso":
<b><?= Session::get('curso') ?? "No existe" ?></b></p>

<h2>Comprobar la existencia</h2>
<p>Comprobando la existencia de la variable de sesión "curso":
<b><?= Session::has('curso') ? "Si" : "No" ?></b></p>


<p>Comprobando la existencia de la variable de sesión "profe":
<b><?= Session::has('profe') ? "Si" : "No" ?></b></p>

<p> Olvidando una variable de sesión "curso":
<b><?= Session::forget('curso') ?? "No existe" ?></b></p>

<p> Recuperando una variable de sesión "curso":
<b><?= Session::get('curso') ?? "No existe" ?></b></p>


