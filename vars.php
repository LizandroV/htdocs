<?php
$url = "https://www.ejemplo.com";

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "La URL es válida.";
} else {
    echo "La URL no es válida.";
}