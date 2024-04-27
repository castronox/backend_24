<?php
include 'config/config.php';
include 'libraries/autoload.php';

$from = "perico@hotmail.com"; # Emisor
$name = "Perico";
$to = "castronox@outlook.es";
$subject = "Test de envío local";
$message = "Hola mundo";

# Crea el nuevo email

$email = new Email($to, $from, $name, $subject, $message);

# Lo envía, si todo va bien veremos "enviado".
echo $email->send() ? "enviado!" : "no enviado!";

?>
