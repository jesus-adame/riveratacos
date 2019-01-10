((d) => {
  const cerrar_modal = d.querySelector('#cerrar_modal_productos'),
  modal = d.querySelector('#modal_productos'),
  content_modal = d.querySelector('#content_productos'),
  form = d.querySelector('#form_productos'),
  buttons_cat = d.querySelectorAll('.btn_categorias'),
  tabla_productos = d.querySelector('#tabla_productos');

  // SELECT BOXES
  // SELECT MESAS

  const select_mesas = modal.querySelector('#select_mesas'),
  select_cuentas = modal.querySelector('#select_cuentas');

  function obtenerMesas() {
    let data = new FormData();
    data.append('accion', 'obtener');
    select_mesas.innerHTML = '';

    fetch('core/ajax/datosMesasAjax.php', {
      method: 'POST',
      body: data
    }).then(response => response.json())
    .then(dataJson => {
      for (let i in dataJson) {
        let item = dataJson[i];

        select_mesas.innerHTML += `
        <option value="${item.id_mesa}">Mesa ${item.id_mesa}</option>`;
      }
    })
  }

  function obtenerCuentas(id_mesa) {
    let data = new FormData();
    data.append('accion', 'obtener');
    data.append('id_mesa', id_mesa);
    select_cuentas.innerHTML = '';

    fetch('core/ajax/datosCuentaAjax.php', {
      method: 'POST',
      body: data
    }).then(response => response.json())
    .then(dataJson => {
      for (let i in dataJson) {
        let item = dataJson[i];

        select_cuentas.innerHTML += `
        <option value="${item.id_cuenta}">Cuenta ${item.id_cuenta} - ${item.cliente}</option>`;

        console.log(item)
      }
    })
  }

  select_mesas.addEventListener('change', (e) => {
    let id_mesa = e.target.value;
    obtenerCuentas(id_mesa);
  })

  // ESCUCHA LOS BOTONES DE CATEGORIAS
  for (let i = 0; i < buttons_cat.length; i++) {
    let item = buttons_cat[i];

    item.addEventListener('click', (e) => {
      productosDisponibles(item.id);
      modal.style.display = 'block';
      obtenerMesas();
    })
  }

  cerrar_modal.addEventListener('click', function() {
    ocultarModal()
  })

  content_modal.addEventListener('click', function(e) {
    if (e.target == content_modal) {
      ocultarModal()
    }
  })

  function ocultarModal() {
    modal.style.display = 'none'
    form.reset()
  }

  // LISTAR PRODUCTOS EN EL FORMUALRIO
  const productosDisponibles = (btn) => {
    let tabla_productos = d.querySelector('#tabla_productos');
    tabla_productos.innerHTML = '';

    let data = new FormData();
    data.append('categoria', btn);

    fetch('core/ajax/datosProductosAjax.php', {
      method: 'POST',
      body: data
    })
    .then(response => response.json())
    .then(dataJson => {
      if (dataJson != 'fail') {
        for (let i in dataJson) {
          let item = dataJson[i];

          tabla_productos.innerHTML += `
          <div class="col-xs-12">
            ${item.nombre}
            <input class="col-xs-12" type="number" placeholder="Cantidad" min="0" max="200" value="1">
            <button class="btn primary" type="button" id_prod="${item.id_producto}">Cargar</button>
          </div>`;
        }
      } else {
        alert('No hay productos disponibles');
      }
    }).catch(error => {
      console.log('Error en Ajax: ' + error.message);
    })
  }

  // TABLA DE PRODUCTOS

  tabla_productos.addEventListener('click', (e) => {
    const item = e.target;

    if (item.className == 'btn primary') {
      let id_prod = item.getAttribute('id_prod'),
      input_cantidad = item.parentNode.firstElementChild;
      cargar_producto(id_prod, input_cantidad);
    }

  })

  function cargar_producto(id_prod, input_cantidad) {
    const tbody = document.getElementById('tbody_producto');

    let cant = input_cantidad.value;

    if (cant >= 1) {
      tbody.innerHTML += `
      <tr>
        <td>${cant}</td>
        <td>${id_prod}</td>
        <td>16%</td>
        <td>$ 18</td>
        <td>$ 64</td>
        <td>JUAN</td>
        <td>
          <button class="btn danger" type="button" name="button">X</button>
        </td>
      </tr>`;
    } else {
      alert('Debe agregar una cantidad')
    }
    cant = '';
  }

/* OBTIENE EL DETALLE DE LA CUENTA
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    let dataForm = new FormData(form);

    fetch('core/ajax/datosProuctosAjax.php', {
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
        alert('No se pudo agregar a la cuenta');
      }
    })
    .catch(error => {
      console.log('Ocurrio un error ' + error.message);
    })
  })*/

})(document);
