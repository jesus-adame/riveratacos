class Carrito {
  constructor() {
    this.total = 0;
  }

  sumar(valor) {
    this.total = this.total + parseFloat(valor);
  }

  restar(valor) {
    this.total = this.total - parseFloat(valor);
    if (this.total < 0) {
      this.total = 0;
    }
  }

  getTotal() {
    return this.total;
  }
}

class Modal {
  constructor(id_modal) {
    this.id = document.getElementById(id_modal);
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
