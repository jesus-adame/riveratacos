<div id="inicio_sesion" class="modal" >
  <div id="content_sesion" class="content">
    <div class="window col-xs-8 col-md-4">
      <div class="modal-header">
        <h3>Inicio de Sesión</h3>
        <a id="cerrar_form_sesion" class="close">&times;</a>
      </div>
      <div class="modal-body">
        <form id="form_sesion" class="form col-xs-12" action="core/ajax/sesionAjaxController.php" method="POST">
          <div class="row-between">
            <label for="usuario">Usuario:</label>
            <input id="usuario" class="col-xs-12" name="user" type="text" placeholder="Usuario" maxlength="15">
          </div>

          <div class="row-between">
            <label for="pass">Contraseña:</label>
            <input id="pass" class="col-xs-12" name="pass" type="password" placeholder="Contraseña" maxlength="15">
          </div>

          <div class="flex-end" style="margin-top: 10px">
            <button id="btn_iniciar_sesion" class="btn primary" type="submit" name="button">Ingresar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
