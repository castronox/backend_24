<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices 2d en PHP</title>
</head>
<body>
    
    <?php   
    
    
            #Creación de la matriz del dibujo
    
        $matriz = [ [1,2,3] , [4,5,6] , [7,8,9] ];
    #------^^---------^^---------^^-------^^------
    #-Array padre---child1-----child2----child3---
    #---------------------------------------------
    #---Hijos-------Array 1----Array2----Array3---



        # Para modificar el segundo dato registrado en el primer array
            $matriz[0][1] = 20; 
            
        #La matriz quedaria así
            $matriz = [ [1,20,3] , [4,5,6] , [7,8,9] ];
            
            
        # Para modificar el primer dato registrado en el tercer array    
            $matriz [2][0] = 70;
            
        
            
        #La matriz quedaria así
            $matriz = [ [1,2,3] , [4,5,6] , [70,8,9] ];
            
            echo "<pre>";
            print_r($matriz);
            echo "</pre>";
    
    
    
    ?>


</body>
</html>