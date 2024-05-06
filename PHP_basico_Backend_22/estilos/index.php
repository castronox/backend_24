<?php
# Toma el estilo de la cookie, si no existe usa estilo 1

$estilo = $_COOKIE['estilo'] ?? 'estilo1';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cambio de estilos</title>
	<link rel="stylesheet" type="text/css" href="basico.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$estilo?>.css"/>

	<script>

        window.onload = function(){
        	aplicar.onclick = function(){
        		var estilo = form['estilo'].value;
        			document.cookie = 'estilo ='+estilo+'; expires =Wed, 5 Jul 2024 00:00:00 UTC';
        	}
        }

	</script>
	
	
</head>
	<body>
		<h2>Pagina con estilos</h2>
		<p>Elije el estilo de la WEB</p>

		<form method="POST" id = "form">
			<input type="radio" name = "estilo" value="estilo1" <?= $estilo=='estilo1' ? 'checked' : '' ?>/>
			<label>Estilo  1</label>
			
			<input type="radio" name = "estilo" value="estilo2" <?= $estilo=='estilo2' ? 'checked' : '' ?>/>
			<label>Estilo  2</label>
			
			<button id="aplicar">Seleccionar</button>
		</form>
		
	</body>
</html>