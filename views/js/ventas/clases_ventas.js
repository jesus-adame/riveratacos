
class Modal {
  constructor(id_form) {
    this.id = document.getElementById(id_form);
    this.fondo_modal = this.id.querySelector('.content');
    this.btn_close = this.id.querySelector('.close');
    this.ventana = this.id.querySelector('.window');
    this.h3 = this.id.querySelector('h3');
  }

  abrirModal() {
    this.id.style.display = 'block';
  }

  cerrarModal() {
    this.id.style.display = 'none';
  }
}
