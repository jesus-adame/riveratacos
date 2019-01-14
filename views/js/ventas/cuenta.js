addEventListener('DOMContentLoaded', () => {
  btn_pagar.addEventListener('click', (e) => {
    let id_cuenta = btn_pagar.getAttribute('element');

    if (id_cuenta != null) {
      //pagarCuenta();
    }
  })
})

const pagarCuenta = (id_cuenta) => {
  let data = new FormData();
  data.append('id_cuenta', id_cuenta);
  data.append('accion', 'pagar');
  data.append('id_mesa', btn_pagar.getAttribute('id_mesa'));

  fetch('core/ajax/datosCuentaAjax.php', {
    method: 'POST',
    body: data
  })
  .then(response => response.json())
  .then(dataJson => {
    if (dataJson == 'success') {
      location.reload();
    } else if (dataJson == 'fail') {
      alert('No se pudo realizar el pago');
    }
  })
}
