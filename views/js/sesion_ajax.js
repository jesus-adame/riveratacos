let btnSesion = document.querySelector('#btn_iniciar_sesion')
let formSesion = document.querySelector('#form_sesion')

btnSesion.addEventListener('click', (e) => {
  iniciarSesion(e)
})

function cerrarSesion() {
  fetch('core/ajax/cerrarSesionAjax.php', {
    method: 'POST'
  })
  .then(res => res.json())
  .then(data => {
    if (data == 'success') {
      alert('Has cerrado sesion')
      location.reload()
    }
  })
}

function iniciarSesion(e) {
  e.preventDefault()
  var datos = new FormData(formSesion)

  fetch(formSesion.getAttribute('action'), {
    method: formSesion.getAttribute('method'),
    body: datos
  })

  .then(res => res.json())
  .then(data => {
    if (data == 'success') {
      alert('Se ha iniciado sesión')
      location.reload()
      ocultarFormulario()

    } else if (data == 'not_record') {
      alert('Error en el usuario o contraseña')

    } else if (data == 'empty_fields') {
      alert('Debe rellenar todos los campos')
    }
  })
}
