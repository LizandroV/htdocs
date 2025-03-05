<?php


$file = "texto.txt";
$file = $_GET["file"] ?? $file;


if (isset($_GET["action"])) {
    if ($_GET["action"] == "Guardar") {
        file_put_contents($file, $_GET["texto"] . "\n", FILE_APPEND);
    } elseif ($_GET["action"] == "Cargar") {
        $text = file_get_contents($file);
    } elseif ($_GET["action"] == "Limpiar") {
        file_put_contents($file, "");
        $text = "";
    }
}

$text = file_get_contents($file);

?>

<h1>Editar Archivo de texto</h1>

<form>
    <label>Nombre del archivo
        <input type="text" name="file" value="<?= $file ?>">
    </label>
    <textarea name="texto"></textarea>
    <textarea name="final" disabled><?= $text ?></textarea>
    <br>
    <input type="submit" value="Guardar" name="action">
    <input type="submit" value="Cargar" name="action">
    <input type="submit" value="Limpiar" name="action">
</form>

<style>
    textarea {
        width: 100%;
        height: 200px;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>