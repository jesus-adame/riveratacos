<?php
/* Smarty version 3.1.33, created on 2018-12-19 04:18:53
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\form_agregar_tacos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c19b89decc1c1_09890633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf98ace67f7268ad4b8ed9a7e3197327637b382' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\form_agregar_tacos.tpl',
      1 => 1545189447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c19b89decc1c1_09890633 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_tacos" class="modal">
  <div id="content_tacos" class="content">
    <div class="window col-xs-8">

      <div class="modal-header">
        <h3>Tacos</h3>
        <a id="cerrar_form_tacos" class="close">&times;</a>
      </div>

        <div class="modal-body-g">
      <form id="form_tacos" class="" action="" method="POST">
          <div class="col-xs-12 row-between">
            <div class="col-xs-6">
              <h3>Cuenta</h3>
              <select class="form col-xs-11" name="">
                  <option value="1">Mesa 1</option>
                  <option value="2">Mesa 2</option>
                  <option value="3">Mesa 3</option>
                  <option value="4">Mesa 4</option>
                  <option value="5">Mesa 5</option>
              </select>
            </div>

            <div class="col-xs-6">
              <h3>Cantidad</h3>
              <select class="form col-xs-12" name="">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
              </select>
            </div>

          </div>
          <br><br>

            <div class="row-between col-xs-12">
              <div class="closter_productos col-xs-6">
                <button type="button" name="button" class="btn col-xs-12">Tacos de </button>
                <button type="button" name="button" class="btn col-xs-12">Tacos de </button>
                <button type="button" name="button" class="btn col-xs-12">Tacos de </button>
                <button type="button" name="button" class="btn col-xs-12">Tacos de </button>
                <button type="button" name="button" class="btn col-xs-12">Tacos de </button>
              </div>

              <div class="col-xs-6">
                <table class="tabla col-xs-12">
                  <thead>
                    <th>ID</th>
                    <th>Producto</th>
                  </thead>
                </table>
              </div>

            </div><br><br>

            <button id="btn_agregar_tacos" class="btn primary" type="submit" name="button">Agregar Orden</button>
        </div>
      </form>

    </div>
  </div>
</div>
<?php }
}
