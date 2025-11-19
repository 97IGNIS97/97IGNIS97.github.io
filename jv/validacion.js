function validarRegistro() {
  let pass = document.querySelector('input[name="contrasena"]').value;
  if (pass.length < 6) {
    alert("La contraseña debe tener al menos 6 caracteres.");
    return false;
  }
  return true;
}
