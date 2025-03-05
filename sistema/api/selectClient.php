<?php
// http://localhost/sistema/api/selectClient.php?id=18
// Set up the database connection
$servername = "localhost";
$username = "root";
$password = "";

if (isset($_GET["id"])) {
    $conn = new mysqli($servername, $username, $password);

    $ID = $_GET["id"];

    $query = "select * from sistema.clientes where id = {$ID}";
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
} else {
    echo "Error: Missing parameters";
}
