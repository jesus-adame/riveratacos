addEventListener('DOMContentLoaded', () => {
  const modal = new Modal('modal_cuentas');

  obtenerMesas()
  .then(dataJson => {
    pintarMesas(dataJson);
  })
  // SE CREA EL OBJETO MODAL

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

      mostrarCuentas(e.target.id)
      .then(dataJson => pintarCuentas(dataJson))
      .then(() => modal.abrirModal())
    }
  })

  tbody_cuentas.addEventListener('click', (e) => {
    e.preventDefault();
    let classButton = e.target.className;

    if (classButton == 'btn primary') {
      mostrarDetalleCuenta(e.target.textContent)
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
      }).then(() => modal.cerrarModal());
    }
  })
})

function mostrarCuentas(id) {
  const data = new FormData();

  data.append('id_mesa', id);
  data.append('accion', 'obtener_cuenta');

  return res = fetch('core/ajax/obtener_cuentas.php', {
    method: 'POST',
    body: data
  }).then(response => response.json());
}

function pintarMesas(dataJson) {
  if (dataJson != 'fail') {
    for (var i in dataJson) {
      let val = dataJson[i]
      div_mesas.innerHTML += `<button id="${val.id_mesa}" type="button" name="button" class="diseno_m col-xs-10">Mesa ${val.id_mesa}</button>`;
    }
  } else {
    alert('No hay mesas que mostrar');
  }
}

function pintarCuentas(dataJson) {
  tbody_cuentas.innerHTML = '';

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
}

function mostrarDetalleCuenta(id) {
  tabla_cuenta.innerHTML = '';

  let data = new FormData();
  data.append('id_cuenta', id);

  return res = fetch('core/ajax/datosDetalleCuentaAjax.php', {
    method: 'POST',
    body: data
  })
  .then(response => response.json());
}
