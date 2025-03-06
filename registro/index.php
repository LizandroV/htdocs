<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post">
        <h2>Hola!</h2>
        <p>Inicia tu registro</p>

        <div class="input-wrapper">
            <input type="text" name="name" id="name" placeholder="Nombre">
            <img class="input-icon" src="images/name.svg" alt="register">
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" id="email" placeholder="Email">
            <img class="input-icon" src="images/email.svg" alt="email">
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" id="direction" placeholder="Direccion">
            <img class="input-icon" src="images/direction.svg" alt="direction">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" id="phone" placeholder="Telefono">
            <img class="input-icon" src="images/phone.svg" alt="phone">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" id="password" placeholder="Contraseña">
            <img class="input-icon" src="images/password.svg" alt="password">
        </div>
        <input type="submit" name="registro" class="btn" id="registro" value="Registrarse">
    </form>

    <?php
    include('registrar.php');
    ?>

</body>

</html>