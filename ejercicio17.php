<?php
$monto = $_POST['monto'];
$descuento = "";
if ($monto > 100) {
    echo "El precio supera los 100 dolares, se le aplicara un descuento del 10%<br>";
    $descuento = $monto * 0.9;
    echo "El precio final es de: " . $descuento;
} else {
    echo "El precio no supera los 100 dolares, no se le aplicara un descuento";
}
?>