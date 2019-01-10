let alerta_container = document.querySelector('#alerta')
let cerrar_alerta = document.querySelector('#cerrar_alerta')
let alert = ``

function alerta(msg, clase = 'primary', title = 'Alerta') {
  alert = `<div class='alert alert-${clase}'>
    <div class="content">
      <div class="alert-header">
        <h3>${title}</h3>
      </div>

      <div class="alert-body">
        <p>${msg}</p>
        <button id="cerrar_alerta" class="btn ${clase}" type="button">Aceptar</button>
      </div>
    </div>
  </div>`;

  alerta_container.innerHTML = alert
}

if (alerta_container.innerHTML != null) {
  cerrar_alerta.addEventListener('click', cerrarAlerta)
}

function cerrarAlerta() {
  alerta_container.innerHTML = ''
}
