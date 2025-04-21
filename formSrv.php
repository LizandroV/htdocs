<?php

// Detecta el método de la solicitud
$metodo = $_SERVER['REQUEST_METHOD'];
echo $metodo;
echo "<br>";

switch ($metodo) {
    case 'GET':
        if (isset($_GET['nombre'])) {
            echo "Recibido por GET: " . htmlspecialchars($_GET['nombre']);
        } else {
            echo "No se enviaron datos por GET.";
        }
        break;

    case 'POST':
        if (isset($_POST['nombre'])) {
            echo "Recibido por POST: " . htmlspecialchars($_POST['nombre']);
        } else {
            echo "No se enviaron datos por POST.";
        }
        break;

    case 'PUT':
        parse_str(file_get_contents("php://input"), $_PUT);
        if (isset($_PUT['nombre'])) {
            echo "Recibido por PUT: " . htmlspecialchars($_PUT['nombre']);
        } else {
            echo "No se enviaron datos por PUT.";
        }
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $_DELETE);
        if (isset($_DELETE['id'])) {
            echo "Recibido por DELETE: Eliminando ID " . htmlspecialchars($_DELETE['id']);
        } else {
            echo "No se enviaron datos por DELETE.";
        }
        break;

    default:
        echo "Método no soportado.";
        break;
}
