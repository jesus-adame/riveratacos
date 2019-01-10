((d) => {
  const btn_pagar = d.querySelector('#btn_pagar');

  btn_pagar.addEventListener('click', (e) => {
    if (e.target.getAttribute('element') != null) {
      pagar(btn_pagar.getAttribute('element'));
    }
  })

  let pagar = (id_cuenta) => {
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
})(document)
