<?php
// Set up the database connection
//http://localhost/sistema/api/update.php?id=18&nombre=Hola&apellido=Mundo&email=e&telefono=1&detalle=d

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// VARIABLES
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];


    $query = "update sistema.clientes set nombre = '{$nombre}', apellido = '{$apellido}', email = '{$email}', telefono = '{$telefono}', detalle = '{$detalle}' where id = {$id}";
    $result = $conn->query($query);
    if ($result) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "Error: Missing parameters";
    return;
};
$conn->close();
