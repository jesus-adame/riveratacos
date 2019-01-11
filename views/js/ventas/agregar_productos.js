const carro = new Carrito();

addEventListener('DOMContentLoaded', () => {
  const btn_cerrar = modal_productos.querySelector('.close'),
  fondo_modal = modal_productos.querySelector('.content'),
  form = modal_productos.querySelector('.form'),
  buttons_cat = modal_productos.querySelectorAll('.btn_categorias');

  // SELECT BOXES
  // SELECT MESAS

  btn_menu.addEventListener('click', (e) => {
    e.preventDefault();
    buttons_cat[0].click();

    obtenerMesas()
    .then(dataJson => {
      let id = dataJson[0].id_mesa;
      obtenerCuentas(id);
    }).then(() => modal_productos.style.display = 'block')

    obtenerMesas()
    .then(dataJson => {
      for (let i in dataJson) {
        let item = dataJson[i];

        select_mesas.innerHTML += `
        <option value="${item.id_mesa}">Mesa ${item.id_mesa}</option>`;
      }
    });
  })

  obtenerMesas()
  .then(dataJson => {
    for (let i in dataJson) {
      let item = dataJson[i];

      select_mesas.innerHTML += `
      <option value="${item.id_mesa}">Mesa ${item.id_mesa}</option>`;
    }
  });

  select_mesas.addEventListener('change', (e) => {
    let id_mesa = e.target.value;
    obtenerCuentas(id_mesa);
  })

  // ESCUCHA LOS BOTONES DE CATEGORIAS
  for (let i = 0; i < buttons_cat.length; i++) {
    let item = buttons_cat[i];

    item.addEventListener('click', (e) => {
      productosDisponibles(item.id)
      .then(dataJson => {
        let textHTML = '';
        tabla_productos.innerHTML = '';

        if (dataJson != 'fail') {
          for (let i in dataJson) {
            let item = dataJson[i];

            textHTML += `
            <div class="col-xs-12">
              ${item.nombre}
              <p style="text-align: center">
              $ ${item.precio}
              </p>
              <input type="hidden" class="precio" value="${item.precio}">
              <input class="cantidad col-xs-12" type="number" placeholder="Cantidad" min="0" max="200">
              <button class="btn primary" type="button" id_prod="${item.id_producto}">Cargar</button>
            </div>`;
          }
          return textHTML;
        } else {
          alert('No hay productos disponibles');
        }
      }).then(textHTML => tabla_productos.innerHTML = textHTML);
    });
  }

  // CARRITO DE PRODUCTOS
  tbody_producto.addEventListener('click', (e) => {
    let element = e.target,
    classButton = element.className,
    row = element.parentElement.parentElement,
    val = parseFloat(row.querySelector('.subtotal').getAttribute('number'));

    if (classButton == 'btn danger') {
      row.remove();
      carro.restar(val);
      tfoot_producto.textContent = '$' + carro.getTotal().toFixed(2);
    }
  })

  window.addEventListener('click', (e) => {
    if (e.target == fondo_modal || e.target == btn_cerrar) {
      modal_productos.style.display = 'none';
      form.reset();
    }
  })
})

function obtenerMesas() {
  let data = new FormData();
  data.append('accion', 'obtener');
  select_mesas.innerHTML = '';

  return result = fetch('core/ajax/datosMesasAjax.php', {
    method: 'POST',
    body: data
  }).then(response => response.json());
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
    }
  })
}

// LISTAR PRODUCTOS EN EL FORMUALRIO
const productosDisponibles = (btn) => {
  let data = new FormData();
  data.append('categoria', btn);

  return promise = fetch('core/ajax/datosProductosAjax.php', {
    method: 'POST',
    body: data
  }).then(response => response.json())
  .catch(error => {
    console.log('Error en Ajax: ' + error.message);
  });
}

// TABLA DE PRODUCTOS

tabla_productos.addEventListener('click', (e) => {
  const item = e.target;

  if (item.className == 'btn primary') {
    let id_prod = item.getAttribute('id_prod'),
    div = item.parentElement,
    input_cantidad = div.querySelector('.cantidad');

    let producto = {
      id_prod: id_prod,
      name: div.firstChild.data.trim(),
      cantidad: parseInt(div.querySelector('.cantidad').value),
      precio: parseFloat(div.querySelector('.precio').value)
    }

    subtotal = producto.cantidad * producto.precio;
    cargar_producto(producto, input_cantidad, subtotal);
  }
})

function cargar_producto(obj, input, subtotal) {

  if (obj.cantidad >= 1) {
    tbody_producto.innerHTML += `
    <tr>
      <td>${obj.cantidad}</td>
      <td>${obj.name}</td>
      <td>$${obj.precio.toFixed(2)}</td>
      <td class="subtotal" number="${subtotal.toFixed(4)}">$${subtotal.toFixed(2)}</td>
      <td>JUAN</td>
      <td>
        <button class="btn danger" type="button" name="button">X</button>
      </td>
    </tr>`;
    input.value = '';

    carro.sumar(subtotal);
    tfoot_producto.textContent = '$' + carro.getTotal().toFixed(2);
  } else {
    alert('Debe agregar una cantidad')
  }
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
