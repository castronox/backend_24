<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funciones miscelanea</title>
</head>
<body>

	<h1>Funciones de miscelanea en PHP</h1>

	<h2>Funciones get browser() y uniqid</h2>
	<p>La función uniqid() genera nombres únicos a partir del instante de
		tiempo. Es útil para generar nombres de fichero únicos.</p>

	<p><?= uniqid('file_').'.pdf' ?></p>

	<p>Lfunción get_browser() retorna información del navegador del
		cliente. Sin embargo, a día de hoy no funciona bien y es preferible
		usar la superglobal $_SERVER.</p>
    
    <?php var_dump(get_browser());  ?>


</body>
</html>