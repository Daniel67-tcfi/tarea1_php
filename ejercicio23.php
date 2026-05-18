<?php
$precio = $_POST['precio'];
$iva = $precio * 0.13;
$total = $precio + $iva;
echo "El total con IVA incluido es: $total dolares";
?>