<?php
//http://localhost/sistema/api/delete.php?id=1
// Set up the database connection
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

if (isset($_GET["id"])) {
    $ID = $_GET["id"];
    $query = "delete from sistema.clientes where id = {$ID}";
    $result = $conn->query($query);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "Error: Missing parameters";
    return;
}

$conn->close();
