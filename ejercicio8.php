<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if ($num1 < $num2) {
    echo "El numero 1 es menor que el numero 2";
} elseif ($num1 == $num2) {
    echo "Los numeros son iguales";
} else {
    echo "El numero 2 es menor que el numero 1";
}
?>