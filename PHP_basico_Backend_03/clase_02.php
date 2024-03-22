<h1>Imprimiendo</h1>


    <?php 
     $nombre1 ="Robert";
     $nombre2 ="Adolfo";
     $nombre3 ="Pepito";
     $nombre4 ="Carlos";
     
     // Si usamos comillas simples hay que concatenar variables con .
     echo '<p> Bienvenido '.$nombre1.' </p>';
     
     // Usando comillas dobles evitamos concatenar
     echo "<p> Saludos $nombre2 </p>";
     print "<p> Saludos $nombre3 </p>";
    
     // L funcion printf() tiene la misma sintaxis que en C
     printf('<p>Hola que tal </p>', $nombre4);
    ?>


<h2>Forma abreviada</h2>

<p>Bienvenido <?= $nombre1 ?></p>

<h2>Impresión condicional</h2>
<p><?= empty($nombre4) ? "Identifícate" : "¿Que tal? $nombre4" ?></p>



