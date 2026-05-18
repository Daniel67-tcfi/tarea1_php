<?php
if ($_POST) {
    $palabra = $_POST['palabra'];
    $contador = strlen($palabra);
    echo "<p>La palabra '$palabra' tiene $contador letras.</p>";
}
?>