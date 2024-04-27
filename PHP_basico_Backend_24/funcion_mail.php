<?php

# Preparacion de los parametros a pasarle la funcion mail()
$to = "castronox@outlook.es"; # Receptor
$subject = "Test de envío local"; # Asunto
$message = "Hola mundo!";

# Cabeceras adicionales

$headers = "To <$to>\r\n";

$headers .= "From: LOCALHOST <cristian@misitio.com>\r\n";

# Llamamos a la funcion mail con los parámetros adecuados
echo mail($to, $subject, $message, $headers) ? "ENVIADO" : "NO ENVIADO";
?>
