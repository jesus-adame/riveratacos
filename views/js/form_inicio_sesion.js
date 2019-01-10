addEventListener('DOMContentLoaded', () => {
  const cerrarModal = modal_sesion.querySelector('.close'),
  fondo = modal_sesion.querySelector('.content');

  cerrarModal.addEventListener('click', () => {
    ocultarFormulario();
  });

  fondo.addEventListener('click', (e) => {
    if (e.target == fondo) {
      ocultarFormulario();
    }
  });

  btn_login.addEventListener('click', () => {
    mostrarFormulario();
  });
});

btn_logout.addEventListener('click', () => {
  cerrarSesion()
  .then(data => {
    if (data == 'success') {
      alert('Has cerrado sesion');
      location.reload();
    }
  });
});

function mostrarFormulario() {
  modal_sesion.style.display = 'block';
  const focus = form_sesion.querySelectorAll('input')[0];
  focus.focus();
}

function ocultarFormulario() {
  modal_sesion.style.display = 'none';
  form_sesion.reset();
}
