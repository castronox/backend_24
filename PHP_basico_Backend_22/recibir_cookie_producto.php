<h2>Recuperando la COOKIE 'carro'</h2>

<p>Lista de productos que tienes en el carro</p>
<?php

include 'Producto.php';

if (!empty ($_COOKIE['carro'])){
    
    # Recupera la información de la cookie
    $productos = unserialize($_COOKIE['carro']);
    
    # Imprime la lista con la info recuperada
    echo "<ol>";
    foreach ($productos as $producto)
        echo "<li>$producto</li>";

        echo "</ol>";
        }else 
            echo '<p>Carro VACIO</p>';
