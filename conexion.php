<?php
$conexion = new mysqli("localhost", "servi", "IGReyes2025", "login");
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}
?>

