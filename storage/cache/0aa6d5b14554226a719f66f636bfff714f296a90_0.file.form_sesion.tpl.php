<?php
/* Smarty version 3.1.33, created on 2019-01-13 22:47:34
  from 'C:\xampp\htdocs\riveratacos\views\templates\form_sesion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3bb1f6892e61_16079257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aa6d5b14554226a719f66f636bfff714f296a90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\form_sesion.tpl',
      1 => 1547228151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3bb1f6892e61_16079257 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_sesion" class="modal" >
  <div class="content">
    <div class="window col-xs-8 col-md-4">
      <div class="modal-header">
        <h3>Inicio de Sesión</h3>
        <a class="close">&times;</a>
      </div>
      <div class="modal-body">
        <form id="form_sesion" class="form col-xs-12" action="core/ajax/sesionAjaxController.php" method="POST">
          <div class="row-between">
            <label for="usuario">Usuario:</label>
            <input class="col-xs-12" name="user" type="text" placeholder="Usuario" maxlength="15">
          </div>

          <div class="row-between">
            <label for="pass">Contraseña:</label>
            <input class="col-xs-12" name="pass" type="password" placeholder="Contraseña" maxlength="15">
          </div>

          <div class="flex-end" style="margin-top: 10px">
            <button id="btn_iniciar_sesion" class="btn primary" type="submit" name="button">Ingresar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
}
