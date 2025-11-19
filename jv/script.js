document.addEventListener("DOMContentLoaded", () => {
const registerForm = document.getElementById("registerForm");
if (registerForm) {
registerForm.addEventListener("submit", e => {
const pass = registerForm.clave.value;
if (pass.length < 6) {
alert("La contraseña debe tener al menos 6 caracteres");
e.preventDefault();
}
});
}
});