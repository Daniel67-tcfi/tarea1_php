<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if ($num1 > $num2) {
    echo "El número 1 es mayor.";
} elseif ($num1 == $num2) {
    echo "Ambos números son iguales.";
} else {
    echo "El número 2 es mayor.";
}
?>