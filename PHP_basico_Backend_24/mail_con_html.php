
<?php   

$to     = "castronox@outlook.es"; # Receptor
$subject= "Test de envío local" ;
$headers = "MIME-Version: 1.0\r\n";
$headers .="Content-type: text/html; charset=utf-8\r\n";
$headers .="From: NOREPLY <noreply@cristian.com>\r\n";

#Mensaje en HTML (Uso de sintaxis HEREDOC que es mas sencilla para esto)

$message= <<<EOD
<html lang="es">
    <head>
        <title>Test de envío de mail</title>
</head>
<body>
<h3>Test </h3>
<p>Hola mundo</p>
<img src ='https://juegayestudia.com/images/samples/logomenu.png'>
<a href='https://juegayestudia.com'>Click-me</a>
</body>
</html>
EOD;
echo mail($to, $subject, $message, $headers)? "ENVIADO" : "NO ENVIADO";
    
    ?>
 <<<<<