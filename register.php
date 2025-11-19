<?php
require 'conexion.php';


if (isset($_POST['registrar'])) {
$usuario = trim($_POST['usuario']);
$clave = trim($_POST['clave']);
$clave_segura = password_hash($clave, PASSWORD_DEFAULT);


$sql = "INSERT INTO usuarios (usuario, clave) VALUES (?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $usuario, $clave_segura);


if ($stmt->execute()) {
header('Location: index.php');
} else {
echo "Error al registrar usuario";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro</title>
<link rel="stylesheet" href="css/styles.css">
<script defer src="jv/script.js"></script>
</head>
<body>
<div class="card">
<h2>Registrar Usuario</h2>
<form method="POST" id="registerForm">
<input type="text" name="usuario" placeholder="Usuario" required>
<input type="password" name="clave" placeholder="Contraseña" required>
<button type="submit" name="registrar">Registrar</button>
</form>
<a href="index.php">Volver al Login</a>
</div>
</body>
</html>