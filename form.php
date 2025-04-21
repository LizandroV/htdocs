<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas GET, POST, PUT, DELETE</title>
</head>
<body>
    <h2>Formulario GET y POST</h2>
    
    <!-- Formulario GET -->
    <form action="formSrv.php" method="GET">
        <input type="text" name="nombre" placeholder="Tu nombre (GET)">
        <button type="submit">Enviar GET</button>
    </form>

    <!-- Formulario POST -->
    <form action="formSrv.php" method="POST">
        <input type="text" name="nombre" placeholder="Tu nombre (POST)">
        <button type="submit">Enviar POST</button>
    </form>

    <h2>Pruebas PUT y DELETE</h2>

    <!-- Botón para enviar PUT con JavaScript -->
    <button onclick="enviarPut()">Enviar PUT</button>

    <!-- Botón para enviar DELETE con JavaScript -->
    <button onclick="enviarDelete()">Enviar DELETE</button>

    <script>
        function enviarPut() {
            fetch('formSrv.php', {
                method: 'PUT',
                body: new URLSearchParams({ nombre: 'Actualizado desde PUT' })
            })
            .then(response => response.text())
            .then(data => alert(data));
        }

        function enviarDelete() {
            fetch('formSrv.php', {
                method: 'DELETE',
                body: new URLSearchParams({ id: '1' })
            })
            .then(response => response.text())
            .then(data => alert(data));
        }
    </script>
</body>
</html>
