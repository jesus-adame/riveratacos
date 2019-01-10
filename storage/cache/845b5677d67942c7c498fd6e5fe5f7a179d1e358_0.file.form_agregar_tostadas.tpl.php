<?php
/* Smarty version 3.1.33, created on 2018-12-11 18:26:28
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\form_agregar_tostadas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0ff3442c5112_76373044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '845b5677d67942c7c498fd6e5fe5f7a179d1e358' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\form_agregar_tostadas.tpl',
      1 => 1544549171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0ff3442c5112_76373044 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_tostadas" class="modal">
  <div id="content_tostadas" class="content">
    <div class="window col-xs-8">

      <div class="modal-header">
        <h3>Tostadas</h3>
        <a id="cerrar_form_tostadas" class="close">&times;</a>
      </div>

      <form id="form_tostadas" class="" action="" method="POST">
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
              <button type="button" name="button" class="btn col-xs-12">Tostadas de </button>
              <button type="button" name="button" class="btn col-xs-12">Tostadas de </button>
              <button type="button" name="button" class="btn col-xs-12">Tostadas de </button>
              <button type="button" name="button" class="btn col-xs-12">Tostadas de </button>
              <button type="button" name="button" class="btn col-xs-12">Tostadas de </button>
          </div><br><br>

          <button id="btn_agregar_tostadas" class="btn primary" type="submit" name="button">Agregar Orden</button>
      </div>
    </form>

    </div>
  </div>
</div>
<?php }
}
