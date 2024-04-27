<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bifurcación multiple p.2 PHP</title>
</head>
<body>

	<h1>Bifurcación multiple omitiendo BREAK</h1>
    
    <?php
    $nota = 5.5;

    switch ((int) $nota) {

        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "suspenso";
            break;
        case 5:
        case 6:
            echo "aprovado";
            break;
        case 7:
        case 8:
            echo "notable";
            break;
        case 9:
        case 10:
            echo "excelente";
            break;
        default:
            echo "nota incorrecta";
    }

    ?>


</body>
</html>