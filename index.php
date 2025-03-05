<?php
$title = "CURSO PHP";
echo "<h1>$title</h1>";

// Variables
$name = "Lizandro";
$age = 27;
$develover = true;

// IF ELSE
echo "<p>Hi my name is, $name, my age is $age</p>";
if ($develover == true) {
    echo "<p>You are a developer</p>";
} else {
    echo "<p>You are not a developer</p>";
}

// ARRAY - FOREACH
$languages = array('PHP', 'JS', 'Python');
echo "<p>My favorite languages are:</p>";

foreach ($languages as $language) {
    echo "<li>$language</li>";
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