<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bifurcación múltiple PHP</title>
</head>
<body>
    
    <h1>Bifurcación múltiple o switch/case en PHP</h1>
    
    
    <?php   
    $nota = 8.25;
    
    switch ((int) $nota){
        case 0: echo "Supenso";
                break;
        case 1: echo "Supenso";
                break;
        
        case 2: echo "Supenso";
                break;
        
        case 3: echo "Supenso";
                break;
                
        case 4: echo "Suspenso";
                break;

        case 5: echo "Aprovado";
        break;
        
        case 6: echo "Aprovado";
        break;
        
        case 7: echo "Notable";
        break;
        
        case 8: echo "Notable";
        break;
        
        case 9: echo "Excelente";
        break;
        
        case 10: echo "Excelente";
        break;
        
        default: echo "Nota incorrecta";
        
    }
    
    ?>


</body>
</html>