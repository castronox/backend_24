<?php 
   #Ponemos el header en la página 
   #Como hay mucho HTMNL seguido, sale a cuenta cortar el PHP
    function cabecera(string $titulo = '', string $subtitulo = '') { ?>

		<header>
		
			<h1><?= $titulo ?></h1>
			<h2><?= $subtitulo?></h2>
			
		</header>
		
		
<?php }
    #Pone el menú de la página
    #Como hay mucho HTMNL seguido, sale a cuenta cortar el PHP
    
     function menu(string $actual = 'ini'){ ?>

		<menu>
		
		<li><a href="#" <?= $actual == 'ini' ? 'class="active"' : ''?>>Inicio</a>
		<li><a href="#" <?= $actual == 'pro' ? 'class="active"' : ''?>>Productos</a>
		<li><a href="#" <?= $actual == 'con' ? 'class="active"' : ''?>>Contacto</a>
				
		</menu>
		
<?php }

    #Pone las migas de pan en la página
    #Como esta muy mezclado el HTML con el PHP, no corto el PHP y uso 'echo'
function migas(array $entradas = NULL){
    
    if($entradas){
        echo "\t\t<ul class='migas'>\n";
        foreach ($entradas as $pagina=>$enlace)
            echo "\t\t\t<li><a href='$enlace'>$pagina</a></li>\n";
        echo "\t\t</ul>\n";
    }
}

#Pone el pie de página
#Como hay mucho HTML seguido, sale a cuenta cortar el PHP

function pie(string $autor = ''){ ?>

	<footer>
		<p><?= $autor ?></p>
	</footer>

<?php }






