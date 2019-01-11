addEventListener('DOMContentLoaded', () => {
  const controlModal = new Modal('modal_ajustes');

  btn_ajustes.addEventListener('click', (e) => {
    e.preventDefault();
    controlModal.abrirModal();
  })

  window.addEventListener('click', (e) => {
    if (e.target == controlModal.fondo_modal || e.target == controlModal.btn_close) {
      controlModal.cerrarModal();
    }
  })
})
