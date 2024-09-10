document.addEventListener('DOMContentLoaded', function() {
  iniciarApp();
});

function iniciarApp() {
  buscarPorFecha();
}

function buscarPorFecha() {
  const fechaInput = document.querySelector('#fecha');
  fechaInput.addEventListener('input', function(e) {
    const fechaSelecionada = e.target.value;
    console.log(fechaSelecionada);

    window.location = `?fecha=${fechaSelecionada}`;
  });
}