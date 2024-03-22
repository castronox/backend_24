<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 PHP</title>
<body>
   <?php  
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $temperatura = $_POST['temperatura'];
        $decimales = 1;
        $resultado = '';
        
            if (!empty($_POST['temperatura'])){
                
                $resultado = ($temperatura - 32) * 5/9;
            
            }
    }
    
   ?>

    <h1>Datos Fahrenheit a Celsius</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    <label for="temperatura">Temperatura: </label>
    <input type="number" id="temperatura" name="temperatura" value="<?php echo $temperatura; ?>"  >
    <br><br>
    <input type="submit" name="calcular" value="Calcular">
    
    </form>
    
<?php 
if (isset($_POST['temperatura'])){
    
    if($resultado !== ''){
    echo "<p>El resultado de Fahrenheit a Celsius es: " . round($resultado, $decimales) . "º Celsius.</p>";
        }else{
            echo "<p> Escribe un numero porfavor</p>";
        }
        
}

?>


</body>
</html>
