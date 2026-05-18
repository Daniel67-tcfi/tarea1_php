<?php
$celsius = $_POST['celsius'];
$fahrenheit = ($celsius * 9/5) + 32;
echo "$celsius °C equivalen a $fahrenheit °F.";
?>