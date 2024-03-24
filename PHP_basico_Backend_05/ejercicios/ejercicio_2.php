<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 PHP</title>
</head>
<body>
    
    <?php   
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $kilometros = $_POST['kilometros'];
        $decimales = 2;
        $resultado ='';
        $milla_dif = 0.62137;
        
        if (!empty($_POST['kilometros'])){
            
            $resultado = $kilometros * $milla_dif ;
        }
    }
    
    ?>
<h1>Kilometros a millas</h1>

<form method="post" action "<?php echo $_SERVER['PHP_SELF'];?>">
<label for = "kilometros">Kilometros para conversión a millas: </label>
<input type="number" id="kilometros" name="kilometros" value="<?php echo $kilometros
; ?>">
<input type="submit" name="calcular" value="calcular">
</form>

<?php 

if(isset($_POST['kilometros'])) {
    if($resultado !== ''){
        echo "<p>El resultado de la conversión es: " .round($resultado, $decimales) . " Mp/H</p>";
    }else{
        echo "<p>Escribe una dato a calcular porfavor</p>";
    }
}


?>

</body>
</html>