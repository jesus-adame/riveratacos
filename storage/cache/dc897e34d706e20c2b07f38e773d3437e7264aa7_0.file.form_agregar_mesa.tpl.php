<?php
/* Smarty version 3.1.33, created on 2018-12-13 08:35:34
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\form_agregar_mesa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c120bc64c14c9_96163324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc897e34d706e20c2b07f38e773d3437e7264aa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\form_agregar_mesa.tpl',
      1 => 1544685272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c120bc64c14c9_96163324 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_mesa" class="modal">
  <div id="content_mesa" class="content">
    <div class="window col-xs-4">

      <div class="modal-header">
        <h3>Agregar Mesa</h3>
        <a id="cerrar_form_mesa" class="close">&times;</a>
      </div>

      <form id="form_mesa" action="core/ajax/datosMesasAjax.php" method="POST">
        <div class="modal-body">
          <h3>Mesa</h3>
          <div>
              <select id="select_mesas" class="form col-xs-10" name="id_mesa">
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
<?php }
}
