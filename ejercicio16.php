<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago = $_POST['pago'];
$salario = $horas * $pago;
echo "El salario de $nombre es: $salario";
?>