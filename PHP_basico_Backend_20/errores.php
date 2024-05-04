
<h2>Si controlamos los errores...</h2>
<?php
    try{ # Código vigilando en el bloque try
        
         echo new Coche ('Seat', 'Altea');   # ERROR
          
    }catch(Error $e){ # Si se produce un error...
        
        echo "<p>Se produjo un error con descripción:</p>";
        echo "<p>" . $e->getMessage(). "</p>";
                
    }finally{ # Finalmente ... tanto si hay error como si no..
     
        echo "<p>La ejecución continua.";        
    }
?>

<h2>Si no controlamos los errores...</h2>  

<?= new Coche ('Seat' , 'Altea'); # ERROR ?>    
