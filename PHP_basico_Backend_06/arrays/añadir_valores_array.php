<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir valores al array en PHP</title>
</head>
<body>
    
    <?php   
    echo "<h2>Push y POP</h2>";
    
    $lista = [10,20];
    
    //Poner elementos al final
    
   array_push($lista, 30, 40);
   
   //poner un elemento más en el array
   
   $lista[] = 50; #Equivale a ' array_push($lista, 50); '
   
   // Quitar e imñrimir el último elemnto del array
   echo array_pop($lista)."<br>";
   
   //Imprimir el resto del array
   print_r($lista);
   
   
    
    ?>


</body>
</html>