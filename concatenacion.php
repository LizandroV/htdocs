<?php

function validatePass($password) {
    $patron = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&*!])[A-Za-z\d@#$%^&*!]{8,}$/";
    echo preg_match($patron, $password);
    return preg_match($patron, $password);
}

// Prueba
$password = "Segur@0123";
if (validatePass($password)) {
    echo "Contraseña válida ✅";
} else {
    echo "Contraseña no cumple los requisitos ❌";
}

echo "<br>";
echo "<br>";

function generatePass($longitud = 12) {
    return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$%^&*!"), 0, $longitud);
}

echo generatePass(); // Ejemplo: "Xa2@T8d!*pY"

echo "<br>";
echo "<br>";

$password = "MiSegura@123";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Contraseña encriptada: " . $hash;

echo "<br>";
echo "<br>";

$ingresada = "MiSegura@123";

if (password_verify($ingresada, $hash)) {
    echo "Contraseña correcta ✅";
} else {
    echo "Contraseña incorrecta ❌";
}