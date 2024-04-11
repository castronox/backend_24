<?php   
    
    include 'config/config.php';
    include 'libraries/autoload.php';
    
    #Lista de direcciones para el mailing.
    #Podrían haber sido sacadas de una base de datos
    
    $direcciones =[
        
        'castronox@oulook.es',
        'castronox@gmail.com',
        'contacto@orange.es',
        'soporte@vodafone.es'
    ];
    
    # Crearemos un nuevo mensaje sin indicar el receptor
    
    $email = new Email(
        
        '',                                                     # Receptor, en blanco de momento
        'promociones@tiendaonline.com',                         # Emisor del mensaje
        'Tu tienda amiga',                                      # Nombre del emisor
        'Promos Febrero',                                       # Asunto
        'Este mes esta de ofertaca el chopped.'                 # Mensaje
        
        );               
    

 # Recorrmos las entradas de direcciones para enviar el email a cada una de ellas
 
foreach ($direcciones as $direccion)
    
    # Envia los emails 
echo $email->send($direccion) ? "<p>Se ha enviado correctamente a $direccion</p>" : "<p>Ha ocurrido algun error al enviar a $direccion</p>";
?>
