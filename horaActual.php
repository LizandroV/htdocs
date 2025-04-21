<?php
date_default_timezone_set("America/Lima"); // Ajusta la zona horaria
$horaActual = date("H:i:s"); // Hora inicial desde PHP

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora en Vivo</title>
</head>
<body>

<h2>Hora Actual: <span id="hora"><?= $horaActual ?></span></h2>

<script>
function actualizarHora() {
    let ahora = new Date();
    let horas = ahora.getHours().toString().padStart(2, "0");
    let minutos = ahora.getMinutes().toString().padStart(2, "0");
    let segundos = ahora.getSeconds().toString().padStart(2, "0");
    document.getElementById("hora").innerText = `${horas}:${minutos}:${segundos}`;
}

// Actualiza la hora cada segundo
setInterval(actualizarHora, 1000);

// Llama a la función una vez al cargar
actualizarHora();
</script>

</body>
</html>