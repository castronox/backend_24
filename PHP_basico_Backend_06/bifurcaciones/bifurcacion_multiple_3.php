<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bifurcación múltiple p.3 PHP</title>
</head>
<body>

	<h1>Bifurcación múltiple con RANGOS</h1>
    
    <?php
    $nota = 9.25;

    switch (true) {

        case $nota < 0 || $nota > 10:
            echo "nota incorrecta";
            break;
        case $nota < 5:
            echo "suspenso";
            break;
        case $nota < 7:
            echo "notable";
            break;
        default:
            echo "excelente";
    }

    ?>


</body>
</html>