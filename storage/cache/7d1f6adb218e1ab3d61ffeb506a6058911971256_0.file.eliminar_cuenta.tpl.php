<?php
/* Smarty version 3.1.33, created on 2018-12-11 18:55:53
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\eliminar_cuenta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0ffa291fc7a1_11851699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d1f6adb218e1ab3d61ffeb506a6058911971256' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\eliminar_cuenta.tpl',
      1 => 1544550946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0ffa291fc7a1_11851699 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="" class="modal" >
  <div id="" class="content">
    <div class="window col-xs-4">
      <div class="modal-header">
        <h3>Eliminar Cuenta</h3>
        <a id="cerrar_eliminar_cuenta" class="close">&times;</a>
      </div>
      <div class="modal-body">
        <form id="form_sesion" class="form col-xs-12" action="core/ajax/sesionAjaxController.php" method="POST">
          <div class="row-between">
            <label for="motivo"><h3>Motivo de cancelacion</h3></label><br>
            <input id="motivo" class="col-xs-6" name="motivo" type="text" placeholder="Breve explicación" maxlength="45">
          </div>
          <h3>Mesa</h3>
          <div>
              <select class="form col-xs-10" name="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
          </div>
          <div class="flex-end" style="margin-top: 10px">
            <button id="btn_iniciar_sesion" class="btn danger" type="submit" name="button">Eliminar Cuenta</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
}
