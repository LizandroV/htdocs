<?php
// http://localhost/sistema/api/select.php
// Set up the database connection
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
$query = "select * from sistema.clientes";

// $result = $conn->query($query);
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo "0 results";
}
$conn->close();
