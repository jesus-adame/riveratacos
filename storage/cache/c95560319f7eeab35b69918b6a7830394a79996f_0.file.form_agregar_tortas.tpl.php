<?php
/* Smarty version 3.1.33, created on 2018-12-11 18:26:28
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\form_agregar_tortas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0ff34423f513_42033756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95560319f7eeab35b69918b6a7830394a79996f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\form_agregar_tortas.tpl',
      1 => 1544549160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0ff34423f513_42033756 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_tortas" class="modal">
  <div id="content_tortas" class="content">
    <div class="window col-xs-8">

      <div class="modal-header">
        <h3>Tortas</h3>
        <a id="cerrar_form_tortas" class="close">&times;</a>
      </div>

      <form id="form_tortas" class="" action="" method="POST">
      <div class="modal-body-g">
        <div class="col-xs-5">
          <h3>Cantidad</h3>
          <select class="form col-xs-12" name="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
        </div>
        <br><br>

          <div class="closter_productos">
              <button type="button" name="button" class="btn col-xs-12">Tortas de </button>
              <button type="button" name="button" class="btn col-xs-12">Tortas de </button>
              <button type="button" name="button" class="btn col-xs-12">Tortas de </button>
              <button type="button" name="button" class="btn col-xs-12">Tortas de </button>
              <button type="button" name="button" class="btn col-xs-12">Tortas de </button>
          </div><br><br>

          <button id="btn_agregar_tortas" class="btn primary" type="submit" name="button">Agregar Orden</button>
      </div>
    </form>

    </div>
  </div>
</div>
<?php }
}
