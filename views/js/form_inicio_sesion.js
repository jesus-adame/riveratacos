
let cerrar_form_sesion = document.querySelector('#cerrar_form_sesion')
let modal_sesion = document.querySelector('#inicio_sesion')
let content_sesion = document.querySelector('#content_sesion')
let form_sesion = document.querySelector('#form_sesion')


cerrar_form_sesion.addEventListener('click', function() {
  ocultarFormulario()
})

content_sesion.addEventListener('click', function(e) {
  if (e.target == content_sesion) {
    ocultarFormulario()
  }
})

function mostrarFormulario() {
  modal_sesion.style.display = 'block'
}

function ocultarFormulario() {
  modal_sesion.style.display = 'none'
  form_sesion.reset()
}
