// Programación del Formulario AGREGAR MESA
addEventListener('DOMContentLoaded', () => {
  const modal = new Modal('modal_mesa');

  /* Abrir y cerrar formulario */
  btn_agregar_m.addEventListener('click', () => {

    mesasDisponibles()
    .then(dataJson => {
      if (dataJson != 'fail') {
        for (let i in dataJson) {
          let item = dataJson[i];
          select_mesas_agregar.innerHTML += `<option value="${item.id_mesa}">Mesa ${item.id_mesa}</option>`;
        }
      } else {
        alert('No hay mesas disponibles');
      }
    })
    .then(() => modal.abrirModal());
  })

  window.addEventListener('click', e => {
    if (e.target == modal.fondo_modal || e.target == modal.btn_close) {
      modal.cerrarModal();
    }
  })
  /*
    Peticiones AJAX
  */
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    let datos = new FormData(form_mesa);

    datos.append('accion', 'agregar');
    mesasAjax(datos)
    .then(dataJson => {
      if (dataJson == 'success') {
        form_mesa.reset();
        ocultarModal();
        location.reload();
      } else if (dataJson == 'fail') {
        alert('No se pudo gregar la cuenta');
      }
    })
  })
})

const mesasAjax = (formData) => {
  return res = fetch('core/ajax/datosCuentaAjax.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .catch(error => {
    console.log('Ocurrio un error' + error.message);
  })
}

const mesasDisponibles = () => {
  let data = new FormData();
  data.append('accion', 'select_mesas');
  select_mesas_agregar.innerHTML = '';

  return res = fetch('core/ajax/datosMesasAjax.php', {
    method: 'POST',
    body: data
  })
  .then(response => response.json())
  .catch(error => {
    console.log('Error en Ajax: ' + error.message);
  })
}
