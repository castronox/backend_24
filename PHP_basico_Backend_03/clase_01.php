<?php
echo '<h1> Hola mundo </h1>';

// Miramos si la direciva display_error está a 1 o 0
echo "<p>Mostrar errores de PHP: ";
echo ini_get('display errors') ? 'SI' : 'NO';
echo "</p>";

// Mira el puerto SMTP configurado para el envío de emails
echo "<p>Puerto SMTP configurado: ";
echo ini_get('smtp_port'); // ahora debe ser el 25
echo "</p>";

// Cambia el puerto SMTP (solo hasta el final del script)
ini_set('smtp_port', 2525);
// Mira el puerto SMTP para el envío de emails
echo "<p>Puerto SMTP configurado: ";

echo ini_get('smtp_port'); // Ahora debe ser el 2525
echo "</p>";
?>