<?php
session_start();
require 'conexion.php';


if (isset($_POST['login'])) {
$usuario = trim($_POST['usuario']);
$clave = trim($_POST['clave']);


$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();


if ($resultado->num_rows > 0) {
$row = $resultado->fetch_assoc();
if (password_verify($clave, $row['clave'])) {
$_SESSION['usuario'] = $usuario;
header('Location: inicio.php');
exit;
} else {
$error = "Contraseña incorrecta";
}
} else {
$error = "Usuario no encontrado";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/styles.css">
<script defer src="jv/script.js"></script>
</head>
<body>
<div class="card">
<h2>Iniciar Sesión</h2>
<form method="POST" id="loginForm">
<input type="text" name="usuario" placeholder="Usuario" required>
<input type="password" name="clave" placeholder="Contraseña" required>
<button type="submit" name="login">Ingresar</button>
</form>
<a href="register.php">Crear Cuenta</a>
<?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
</div>
</body>
</html>