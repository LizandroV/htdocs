<?php
$title = "CURSO PHP";
echo "<h1>$title</h1>";

// Variables
$name = "Lizandro";
$age = 27;
$developer = true;

const DNI = 75922175;
define("DATE","27/2/2025");

// IF ELSE
echo "<p>Hi my name is, $name, my age is $age</p>";
if ($developer == true) {
    echo "<p>You are a developer</p>";
} else {
    echo "<p>You are not a developer</p>";
}

// ARRAY - FOREACH
$languages = array('PHP', 'JS', 'Python');
echo "<p>My favorite languages are:....</p>";

foreach ($languages as $language) {
    echo "<li>$language</li>";
}

echo DNI;
echo "<br>";
echo DATE;
$usuario = ["nombre" => "Pedro", "edad" => 25];

foreach ($usuario as $clave => $valor) {
    echo "$clave: $valor <br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

</body>

</html>