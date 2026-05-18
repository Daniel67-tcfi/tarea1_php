<?php
$numero = $_POST['numero'];
$suma = 0;
for  ($i = 0; $i < $numero; $i++) {
    $suma += $i;
}
echo "La suma de los números desde 1 hasta $numero es: $suma";
?>