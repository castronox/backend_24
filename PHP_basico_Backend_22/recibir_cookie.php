
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Recuperando una COOKIE</title>

</head>
<body>
<h2>Recibiendo la COOKIE 'curso'!</h2>

<p>Si has solicitado antes el fichero "enviar.php", tendrás
la cookie  'curso', en caso contrario no la tendrás.</p>

<p>Si la tienes, actualiza varias veces la página para
comprobar que la sigues teniendo. Luego borra la cookie y refresca.</p>

<?= $_COOKIE['curso']?? '<p>La cookie no existe</p>'?>
</body>
</html>