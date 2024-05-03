<?php
# Clase libro, forma parte del MODELO
# Hereda los métodos básicos del CRUD de la clase Model
# Se deben permitir las propiedades dinámicas


#[\AllowDynamicProperties]
class Libro extends Model{}

# PROPIEDADES
# No indicamos las propiedadess

# Si la tabla entidad Libro no se llama ' libros ' , debemos indicar la propiedad estática $table
# de la siguiente manera, por ejemplo si la tabla se llama books;

# protected static string $table = 'books'.

# CONSTRUCTOR 
# No indicamos constructor

# Métodos 
# Aquí pondremos los métodos adicionales que no esten en la clase Model 
# o los que tenemos que redefinir porque no nos van bien.
# Para modelos genéricos no necesitamos nada más.
