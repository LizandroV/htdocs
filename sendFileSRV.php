<?php

// Verificar si se ha enviado un archivo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["archivo"])) {

    // Carpeta donde se guardarán los archivos subidos
    $directorio = "uploads/";
    
    // Nombre original del archivo
    $nombreArchivo = basename($_FILES["archivo"]["name"]);
    
    // Ruta completa donde se guardará el archivo
    $rutaArchivo = $directorio . $nombreArchivo;

    // Tipos de archivos permitidos MIME types
    $tiposPermitidos = ["image/jpeg", "image/png", "image/gif", "application/pdf"];
    
    // Verificar si el archivo es de un tipo permitido
    if (!in_array($_FILES["archivo"]["type"], $tiposPermitidos)) {
        echo "Error: Solo se permiten imágenes (JPG, PNG, GIF) y PDFs.";
        exit;
    }

    if ($_FILES["archivo"]["size"]/1024>3072){
        echo "Error: Archivo muy pesado";
        exit;
    }


    // Verificar que el directorio "uploads/" exista, si no, crearlo
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }

    // Mover el archivo a la carpeta de destino
    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $rutaArchivo)) {
        echo "El archivo se ha subido correctamente: <a href='$rutaArchivo'>$nombreArchivo</a>";
    } else {
        echo "Error al subir el archivo.";
    }
} else {
    echo "No se ha enviado ningún archivo.";
}

?>
