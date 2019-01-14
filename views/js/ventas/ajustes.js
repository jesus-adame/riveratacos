addEventListener('DOMContentLoaded', () => {
  const controlModal = new Modal('modal_ajustes');

  btn_ajustes.addEventListener('click', (e) => {
    e.preventDefault();

    obtenerProductos()
    .then(dataJson => {
      ajustes_tbody_productos.innerHTML = '';
      for (let i in dataJson) {
        let item = dataJson[i];
        ajustes_tbody_productos.innerHTML += `<tr>
          <td>${item.id_producto}</td>
          <td>${item.nombre}</td>
          <td>${item.precio}</td>
          <td>${item.ganancia}</td>
          <td>
            <button class="btn atention" type="button" name="button">Editar</button>
            <button class="btn danger" type="button" name="button">Eliminar</button>
          </td>
        </tr>`
      }

    }).then(() => controlModal.abrirModal())
  })

  window.addEventListener('click', (e) => {
    if (e.target == controlModal.fondo_modal || e.target == controlModal.btn_close) {
      controlModal.cerrarModal();
    }
  })
})

async function obtenerProductos() {
  let formData = new FormData();
  formData.append('accion', 'obtener');

  return res = await fetch('core/ajax/datosProductosAjax.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
}
