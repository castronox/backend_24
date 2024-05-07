<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Finalizar compra</title>
	
</head>
<body>
	<h2>Finalizar compra</h2>
	
	<p>Lista de productos que tienes en el carrito.</p>
	
	<?php  // Si llega información al post 

if (!empty($_POST['compra'])){

        #Recuperamos los producto via POST en JSON
    
        $productos = json_decode ( $_POST['compra']);
        
        echo "<p>Hay ". count($productos) ." </p>";
        
        
        
        # Muestra la lista de producto en el carro 
        
        echo "<ol>";
        
            foreach ($productos as $producto)
                echo "<li>$producto</li>";
            
        echo "</ol>";
}


?>

<p> Ahora tocaría pagar </p>

</body>
