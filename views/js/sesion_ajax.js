btn_iniciar_sesion.addEventListener('click', (e) => {
  iniciarSesion(e)
  .then(data => {
    if (data == 'success') {
      ocultarFormulario();
      alert('Se ha iniciado sesión');
      location.reload();

    } else if (data == 'not_record') {
      alert('Error en el usuario o contraseña')

    } else if (data == 'empty_fields') {
      alert('Debe rellenar todos los campos')
    }
  });
});

function cerrarSesion() {
  return result = fetch('core/ajax/cerrarSesionAjax.php', {
    method: 'POST'
  })
  .then(res => res.json());
}

function iniciarSesion(e) {
  e.preventDefault();
  let datos = new FormData(form_sesion);

  return result = fetch(form_sesion.getAttribute('action'), {
    method: form_sesion.getAttribute('method'),
    body: datos
  })
  .then(res => res.json());
}
