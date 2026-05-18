<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if ($num2 == 0) {
    echo "No se puede dividir por cero.";
} else {
    $division = $num1 / $num2;
    echo "La división de $num1 entre $num2 es: $division";
}
?>