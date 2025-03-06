<?php

include("conexion.php");

if (isset($_POST["registro"])) {
    if (
        strlen($_POST["name"]) >= 1 &&
        strlen($_POST["email"]) >= 1 &&
        strlen($_POST["direction"]) >= 1 &&
        strlen($_POST["phone"]) >= 1 &&
        strlen($_POST["password"]) >= 1
    ) {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $direction = trim($_POST["direction"]);
        $phone = trim($_POST["phone"]);
        $password = trim($_POST["password"]);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO registro(nombre, email, direccion, telefono, password, fecha_registro) 
            VALUES ('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
        $resultado = mysqli_query($conn, $consulta);

        if ($resultado) {
?>
            <h3 class="success">¡Te has registrado correctamente!</h3>
        <?php
        } else {
        ?>
            <h3 class="error">¡Ha ocurrido un error!</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="error">¡Por favor complete los campos!</h3>
<?php
    }
};
