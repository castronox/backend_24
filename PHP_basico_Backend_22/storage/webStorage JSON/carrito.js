// Al cargar la página 
	window.onload = function(){
	
	// Si no había carrito, creamos uno nuevo (lista vacía)
		if (localStorage.carrito === undefined)
				localstorage.carrito = JSON.stringify([]);
				
		// Toma la información del carrito
		let carrito = JSON.parse(localStorage.carrito);
		
		// Muestra el total de elementos que hay en él
		total.innerHTML = carrito.length;
	
	}

// Vaciar carrito

	function vaciar (){
		localStorage.carrito = JSON.stringify([]);
		total.innerHTML = 0;
	}


// Añadir producto al carrito

	function anadir(producto){
		
		// Recupera la información guardada en el carrito
		let carrito = JSON.parse(localStorage.carrito);
		carrito.push(producto);			  // Añade el nuevo producto
		total.innerHTML = carrito.length; // Actualiza el total
		
	
		localStorage.carrito = JSON.stringify(carrito); // Guarda el carrito
		alert('Producto ' + producto + ' añadido.');
	
}


	function finalizar(){
		
		// Guarda el carrito en un input hidden para que sea enviada la info
		// por POST  al servidor
		compra.value = localStorage.carrito;
	}

