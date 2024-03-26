<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 en PHP</title>
</head>
<body>



<form action = "post">
<label>Introduce un numero y sabrás si es PAR o IMPAR:</label>
<input type='number' name='numero' required>
<br>
<input type = 'submit' value = 'enviar'
</form>
    
    <?php 
    
    $numero = empty($_POST['numero']) ?? 0;
    
    if ($numero%2 == 0) {
        echo "el $numero es par";
    }else{
        
        echo "el $numero es impar";
    }
    
    
    ?>


</body>
</html>