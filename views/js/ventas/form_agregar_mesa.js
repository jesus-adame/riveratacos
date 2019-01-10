// Programación del Formulario AGREGAR MESA

((d) => {
  const cerrar_form = d.querySelector('#cerrar_form_mesa');
  const modal = d.querySelector('#modal_mesa');
  const fondo_modal = d.querySelector('#content_mesa');
  const form = d.querySelector('#form_mesa');
  const btn_mostrar_modal = d.querySelector('#btn_agregar_m');
  const select_mesas = d.querySelector('#select_mesas');

  /* Abrir y cerrar formulario */

  btn_mostrar_modal.addEventListener('click', () => {
    modal.style.display = 'block';

    mesasDisponibles();

    cerrar_form.addEventListener('click', function() {
      ocultarModal();
    })

    fondo_modal.addEventListener('click', function(e) {
      if (e.target == fondo_modal) {
        ocultarModal();
      }
    })
  })

  function ocultarModal() {
    modal.style.display = 'none';
    form.reset();
  }
  /*
    Peticiones AJAX
  */
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    let dataForm = new FormData(form);

    dataForm.append('accion', 'agregar');

    fetch('core/ajax/datosCuentaAjax.php', {
      method: 'POST',
      body: dataForm
    })
    .then(response => response.json())
    .then(dataJson => {
      if (dataJson == 'success') {
        form.reset();
        ocultarModal();
        location.reload();
      } else if (dataJson == 'fail') {
        alert('No se pudo gregar la cuenta');
      }
    })
    .catch(error => {
      console.log('Ocurrio un error' + error.message);
    })
  })

  const mesasDisponibles = () => {
    let data = new FormData();
    data.append('accion', 'select_mesas');
    select_mesas.innerHTML = '';

    fetch('core/ajax/datosMesasAjax.php', {
      method: 'POST',
      body: data
    })
    .then(response => response.json())
    .then(dataJson => {
      if (dataJson != 'fail') {
        for (let i in dataJson) {
          let item = dataJson[i];

          select_mesas.innerHTML += `<option value="${item.id_mesa}">Mesa ${item.id_mesa}</option>`;
        }
      } else {
        alert('No hay mesas disponibles');
      }
    }).catch(error => {
      console.log('Error en Ajax: ' + error.message);
    })
  }

})(document);
