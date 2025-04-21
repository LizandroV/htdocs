<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
</head>
<body>

    <h2>Subir Archivo</h2>
    
    <form action="sendFileSRV.php" method="POST" enctype="multipart/form-data" 
    class="formularioAJAX" id="formularioAJAX">
        <input type="file" name="archivo" required>
        <button type="submit">Subir</button>
    </form>
    <script src="sendFileAJAX.js"></script>
</body>
</html>