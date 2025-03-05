<?php
// Set up the database connection
//http://localhost/sistema/api/insert.php?nombre=Rosa&apellido=Cardenas&email=email@email.com&telefono=23569898&detalle=detalle1

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// VARIABLES
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];


    $query = "insert into sistema.clientes (nombre, apellido, email, telefono, detalle) 
            values ('{$nombre}', '{$apellido}', '{$email}', '{$telefono}', '{$detalle}')";
    $result = $conn->query($query);
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "Error: Missing parameters";
    return;
};
$conn->close();
