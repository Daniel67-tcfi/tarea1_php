<?php
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$n3 = $_POST['nota3'];
$promedio = ($n1 + $n2 + $n3) / 3;
echo "El promedio final es: " . $promedio;
if ($promedio >= 6) {
    echo "<br>El estudiante aprobó.";
} else {
    echo "<br>El estudiante reprobo.";
}
?>