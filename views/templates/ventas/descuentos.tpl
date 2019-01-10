<div id="modal_descuentos" class="modal">
  <div id="content_descuentos" class="content">
    <div class="window col-xs-4">

      <div class="modal-header">
        <h3><i class="fas fa-percent"></i> Descuentos</h3>
        <a id="cerrar_descuentos" class="close">&times;</a>
      </div>

      <form id="form_descuentos" class="" action="" method="POST">
      <div class="modal-body">
        <h4>Mesa</h4>
          <div>
              <select class="form col-xs-10" name="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
          </div>
        <h4>Cantidad de descuento</h3>
        <input id="desc" class="col-xs-10" name="comensales" type="text" maxlength="15">
        <h4>Porcentaje de descuento</h4>
        <div>
            <select class="form col-xs-10" name="">
              <option value="0">0%</option>
              <option value="10">10%</option>
              <option value="15">15%</option>
              <option value="20">20%</option>
              <option value="25">25%</option>
            </select>
        </div>

            <button id="btn_aplicar_descuento" class="btn atention" type="submit" name="button">Aplicar descuento</button>
      </div>
    </form>

    </div>
  </div>
</div>
