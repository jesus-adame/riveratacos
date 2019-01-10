let cerrar_descuentos = document.querySelector('#cerrar_descuentos')
let modal_descuentos = document.querySelector('#modal_descuentos')
let content_descuentos = document.querySelector('#content_descuentos')
let form_descuentos = document.querySelector('#form_descuentos')


cerrar_descuentos.addEventListener('click', function() {
  ocultarDescuentos()
})

content_descuentos.addEventListener('click', function(e) {
  if (e.target == content_descuentos) {
    ocultarDescuentos()
  }
})

function mostrarModalDescuentos() {
  modal_descuentos.style.display = 'block'
}

function ocultarDescuentos() {
  modal_descuentos.style.display = 'none'
  form_descuentos.reset()
}
