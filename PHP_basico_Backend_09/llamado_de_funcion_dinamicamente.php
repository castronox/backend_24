<?php   
    
function saludar(){
    echo "Hola";
}
    
function despedir(){
    echo "Adiós";
}


# Recupera el parametro "operacion" por GET (URL)
# Este parámetro contendrá el nombre de la función a ejecutar
# Por ejemplo: index.php?operacion=saludar
$funcionAInvocar = $_GET['operacion'];


$funcionAInvocar();

?>

