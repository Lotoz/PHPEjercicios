// ejercicio8_disyuncion.js
document.addEventListener('DOMContentLoaded', function(){
  const form = document.getElementById('form8d');
  form.addEventListener('submit', function(e){
    const radios = document.querySelectorAll('input[name="mode"]');
    let checked = false;
    radios.forEach(r => { if (r.checked) checked = true; });
    if (!checked) {
      e.preventDefault();
      alert('Debes seleccionar una opción: mayúsculas o minúsculas.');
    }
  });
});
