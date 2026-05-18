<?php
$nombre = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$subtotal = $cantidad * $precio;
$total = $subtotal;
echo "El cliente $nombre ha comprado $cantidad unidades del producto $producto a un precio de $precio cada una.<br>";
echo "El subtotal es: $subtotal dolares<br>";
echo "El total a pagar es: $total dolares<br>";
?>