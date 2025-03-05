<?php

$lenguajes = array('PHP', 'JS', 'Python');
echo "<p>Mis lenguajes favoritos son:</p>";

foreach ($lenguajes as $lenguaje) {
    echo "<li>$lenguaje</li>";
}
echo "<p>El archivo que se esta editando es: $lenguajes[0]</p>";

array_push($lenguajes, 'Java');
echo "<p>Ahora tengo que aprender $lenguajes[3]</p>";

$frameworks = array(
    array("php", "Laravel", "Symfony"),
    array("JS", "Angular", "React"),
    array("Python", "Django", "Flask")
);

echo "<p>ahora aprendere: {$frameworks[0][1]} </p>";


?>

<style>
    li {
        list-style: none;
    }

    p {
        font-size: 1.5em;
    }
</style>