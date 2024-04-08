<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previsualización en PHP</title>
    <script src='js/Preview.js'></script>
</head>
<body>
    
    <form method="POST" enctype="multipart/form-data" action = "upload.php">
    
    <label>Sube tu imagen de perfil:</label>
    <br>
    
    <input type = "hidden" name = "MAX_FILE_SIZE" value="1240000">
    <input type = "file" accept=".jpg, .jpeg, .gif, .png" name ="fichero" id = "file-with-preview">
    
    <br>
    
    <input type="submit" value = "enviar">
    
    </form>
    <figure>
    <img src = "imagenes/default.png" id="preview-image" width="200">
    </figure>
    


</body>
</html>