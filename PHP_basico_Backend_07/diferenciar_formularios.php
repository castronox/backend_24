<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Diferenciar formularios en PHP</title>
</head>
<body>

	<form method="POST" autocomplete="OFF">
		<input type="hidden" name="login" value="1"> <label>Email:</label> <input
			type="email" name="email" /> <br /> <label>Password:</label> <input
			type="password" name="password" /> <br /> <input type="submit"
			value="login" /> <br />
	</form>



	<form method="POST" autocomplete="OFF">

		<input type="hidden" name="register" value="1" /> <label>Email:</label>
		<input type="email" name="email" /> <br /> <label>Password</label> <input
			type="password" name="password" /> <br /> <input type="submit"
			value="registro" />

	</form>


    
    <?php

    # Si llega el formulario de login..
    if (! empty($_POST['login']))
        echo "<p>Estas intentando hacer LOG IN";

    # Si llega el formulario dse login
    if (! empty($_POST['register']))
        echo "<p>Estas intentando hacer REGISTRO";

    # Si no llega nada
    if (empty($_POST['register']) && empty($_POST['login']))
        echo "<p>Haz LOGIN o REGISTRO porfavor</p>";

    ?>


</body>
</html>