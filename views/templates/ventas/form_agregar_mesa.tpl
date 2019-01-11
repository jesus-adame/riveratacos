<div id="modal_mesa" class="modal">
  <div class="content">
    <div class="window col-xs-4">

      <div class="modal-header">
        <h3>Agregar Mesa</h3>
        <a class="close">&times;</a>
      </div>

      <form id="form_mesa" action="core/ajax/datosMesasAjax.php" method="POST">
        <div class="modal-body">
          <h3>Mesa</h3>
          <div>
            <select id="select_mesas_agregar" class="form col-xs-10" name="id_mesa">
              <!-- <option value="1">1</option> -->
            </select>
          </div>
          <h3>Numero de comensales</h3>
            <input id="comensal" class="col-xs-10" name="personas" type="text" maxlength="15">
          <h3>Cliente</h3>
          <input id="cliente" class="col-xs-10" name="cliente" type="text" maxlength="15">

          <button id="agregar_mesa" class="btn primary" type="submit" name="button">Agregar Mesa</button>
        </div>
      </form>

    </div>
  </div>
</div>
