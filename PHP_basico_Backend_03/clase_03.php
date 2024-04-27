
<h1>Concatenar texto con comillas dobles</h1>


<?php
// Recupera los datos que llegan por GET
$campo = $_GET['campo'] ?? 'dni';
$valor = $_GET['valor'] ?? 'Pepe';
$orden = $_GET['orden'] ?? 'id';
$sentido = $_GET['sentido'] ?? 'ASC';

// Prepara la consulta SQL es más facil con comillas dobles
// para el anidamiento de comillas, podemos usar las simples

$consulta = "SELECT * FROM usuarios WHERE $campo LIKE '%$valor%' ORDER BY $orden $sentido";
echo $consulta; // imprime la consulta
?>






<h2>GENERAR ELEMENTOS DESDE PHP</h2>
<?php

for ($i = 1; $i <= 5; $i ++)
    echo "<li>$i elefante se balanceaba.</li>";
?>


<h2>Generando elementos HTML desde PHP</h2>

<table border="1">
	<tr>
		<th>Radio</th>
		<th>Diámetro</th>
		<th>Perímetro</th>
		<th>Área</th>
	</tr>
  <?php for ($radio = 1; $radio <= 10; $radio++){ ?>
      <tr>
		<td><?= $radio ?></td>
		<td><?= $radio*2?></td>
		<td><?= 2 * pi()*$radio?></td>
		<td><?= pi()*$radio*$radio?></td>
	</tr>
      
  <?php } ?>
    
    </table>