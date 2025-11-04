document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("textoForm");
  const upper = document.getElementById("upper");
  const lower = document.getElementById("lower");
  const mensajeError = document.getElementById("mensajeError");

  form.addEventListener("submit", (e) => {
    if (!upper.checked && !lower.checked) {
      e.preventDefault(); // Detiene el envío al servidor
      mensajeError.textContent = "Debes seleccionar al menos una opción.";
    } else {
      mensajeError.textContent = ""; // Limpia el mensaje si está todo bien
    }
  });
});
