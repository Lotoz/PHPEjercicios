// ejercicio14.js
document.getElementById('form14').addEventListener('submit', function (e) {
  const r = parseFloat(document.getElementById('r').value);
  if (!(r > 0)) {
    e.preventDefault();
    alert('Introduce un radio positivo.');
  }
});