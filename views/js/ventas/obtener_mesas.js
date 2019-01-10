((d) => {
  const div_mesas = d.querySelector('#div_mesas')
  const tabla_cuenta = d.querySelector('#cuenta')
  const li_mesa = d.querySelector('#li_mesa')
  const li_no_px = d.querySelector('#li_no_px')
  const li_estado = d.querySelector('#li_estado')
  const li_cliente = d.querySelector('#li_cliente')

  let data = new FormData();

  data.append('accion', 'obtener');

  div_mesas.innerHTML = ''

  fetch('core/ajax/datosMesasAjax.php', {
    method: 'POST',
    body: data
  })
  .then(response => response.json())
  .then(dataJson => {
    if (dataJson != 'fail') {
      for (var i in dataJson) {
        let val = dataJson[i]
        div_mesas.innerHTML += `<button id="${val.id_mesa}" type="button" name="button" class="diseno_m col-xs-10">Mesa ${val.id_mesa}</button>`;
      }
    } else {
      alert('No hay mesas que mostrar');
    }
  })

  // SE CREA EL OBJETO MODAL
  const modal = new Modal('modal_cuentas');

  modal.btn_close.addEventListener('click', () => {
    modal.cerrarModal();
  })

  window.addEventListener('click', (e) => {
    if (e.target === modal.fondo_modal)
    modal.cerrarModal();
  })

  div_mesas.addEventListener('click', (e) => {
    if (e.target.classList == 'diseno_m col-xs-10') {
      modal.h3.textContent = `MESA ${e.target.id}`;
      modal.abrirModal();
      mostrarCuentas(e.target.id);
    }
  })

  function mostrarCuentas(id) {
    const data = new FormData(),
    tbody_cuentas = modal.id.querySelector('#tbody_cuentas');

    tbody_cuentas.innerHTML = '';

    data.append('id_mesa', id);
    data.append('accion', 'obtener_cuenta');

    fetch('core/ajax/obtener_cuentas.php', {
      method: 'POST',
      body: data
    }).then(response => response.json())
    .then(dataJson => {

      for (let i in dataJson) {
        let item = dataJson[i];

        tbody_cuentas.innerHTML += `
        <tr>
          <td><a href="#" class="btn primary">${item.id_cuenta}</a> </td>
          <td>${item.cliente}</td>
          <td>$ ${item.total_cuenta}</td>
          <td>${item.estado}</td>
          <td>
            <button class="btn atention" cuenta="${item.id_cuenta}" type="button">Pagar</button>
            <button class="btn danger" cuenta="${item.id_cuenta}" type="button">Borrar</button>
          </td>
        </tr>`;
      }
    })
  }

  function mostrarCuenta(id) {
    li_mesa.innerHTML = 'MESA: ';
    li_no_px.innerHTML = 'NO. PERSONAS:';
    li_cliente.innerHTML = 'CLIENTE:';
    li_estado.innerHTML = 'ESTADO CUENTA:';

    let data = new FormData();

    data.append('id_mesa', id);
    data.append('accion', 'obtener');

    fetch('core/ajax/datosCuentaAjax.php', {
      method: 'POST',
      body: data
    })
    .then(response => response.json())
    .then(dataJson => {
      for (let i in dataJson) {
        let btn_pagar = d.querySelector('#btn_pagar');
        let item = dataJson[i];

        li_mesa.innerHTML = `MESA: <b>${item.id_mesa}</b>`;
        li_no_px.innerHTML = `NO. PERSONAS: <b>${item.no_px}</b>`;
        li_cliente.innerHTML = `CLIENTE: <b>${item.cliente}</b>`;
        li_estado.innerHTML = `ESTADO CUENTA: <b>${item.estado}</b>`;
        btn_pagar.setAttribute('element', item.id_cuenta);
        btn_pagar.setAttribute('id_mesa', item.id_mesa);

        mostrarDetalleCuenta(item.id_cuenta);
      }
    })
  }

  function mostrarDetalleCuenta(id) {
    tabla_cuenta.innerHTML = '';

    let data = new FormData();
    data.append('id_cuenta', id);

    fetch('core/ajax/datosDetalleCuentaAjax.php', {
      method: 'POST',
      body: data
    })
    .then(response => response.json())
    .then(dataJson => {
      for (let i in dataJson) {
        let item = dataJson[i];

        tabla_cuenta.innerHTML += `<tr>
          <td>${item.id_detalle_cuenta}</td>
          <td>${item.nombre}</td>
          <td>$ ${item.precio}</td>
          <td>${item.cantidad}</td>
          <td>$ ${item.total}</td>
        </tr>`;
      }
    })
  }
})(document)
