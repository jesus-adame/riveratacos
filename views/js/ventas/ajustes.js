let cerrar_ajustes = document.querySelector('#cerrar_ajustes')
let modal_ajustes = document.querySelector('#modal_ajustes')
let content_ajustes = document.querySelector('#content_ajustes')
let form_ajustes = document.querySelector('#form_ajustes')


cerrar_ajustes.addEventListener('click', function() {
  ocultarAjustes()
})

content_ajustes.addEventListener('click', function(e) {
  if (e.target == content_ajustes) {
    ocultarAjustes()
  }
})

function mostrarModalAjustes() {
  modal_ajustes.style.display = 'block'
}

function ocultarAjustes() {
  modal_ajustes.style.display = 'none'
  form_ajustes.reset()
}
