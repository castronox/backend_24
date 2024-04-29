<?php
include '../config/config.php';
include '../autoload.php';

echo "<h2> Guardando un Socio nuevo </h2>";

$ocio = new Socio;

$ocio->dni		        = '98798790K';
$ocio->nombre		    = 'Capsigrany';
$ocio->apellidos		= 'Gros';
$ocio->nacimiento		= '2005-09-11';
$ocio->email		    = 'capsigrany@gmail.com';
$ocio->direccion		= 'c/ santaoliva 14';
$ocio->cp		        = '08691';
$ocio->poblacion		= 'Monistrol de Monserrat';
$ocio->provincia		= 'Barcelona';
$ocio->telefono		    = '654334532';
$ocio->foto		        = 'esteve.jpg';

$insertaUsuario = $ocio->save();


$muestraSocio = Socio::all();

echo "<ul>";

foreach ($ocio as $socio)
    echo "<li>$socio</li>";
echo "</ul>";

echo "<pre>";
var_dump($muestraSocio);
echo "</pre>";