<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];
echo "<h1>Datos recibidos:</h1>";
echo "Nombre: " . $nombre;
echo "<br>";
echo "Correo Electronico: " . $email;
echo "<br>";
echo "Ciudad: " . $ciudad;
?>