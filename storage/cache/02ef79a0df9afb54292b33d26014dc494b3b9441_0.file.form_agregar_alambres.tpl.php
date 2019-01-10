<?php
/* Smarty version 3.1.33, created on 2018-12-19 04:19:04
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\form_agregar_alambres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c19b8a8bc5e67_91459006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02ef79a0df9afb54292b33d26014dc494b3b9441' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\form_agregar_alambres.tpl',
      1 => 1545189543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c19b8a8bc5e67_91459006 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_productos" class="modal">
  <div id="content_productos" class="content">

    <div class="window col-xs-8">

      <div class="modal-header">
        <h3>Productos</h3>
        <a id="cerrar_modal_productos" class="close">&times;</a>
      </div>


    <div class="modal-body-g">
      <form id="form_productos" class="form" action="core/ajax/datosProductosAjax.php" method="POST">

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
            <input class="col-xs-12" type="number" name="cantidad">
          </div>

        </div>

        <div class="row-between col-xs-12">
          <div id="tabla_productos" class="closter_productos">
            <!--- <button type="button" class="btn col-xs-12">Nombre del producto</button> -->
          </div>

          <div class="col-xs-6">
            <table class="tabla col-xs-12">
              <thead>
                <th>ID</th>
                <th>Producto</th>
              </thead>
            </table>
          </div>

        </div>

        <button id="btn_agregar_p" class="btn primary" type="submit" name="button">Cargar</button>
      </form>
    </div>

    </div>
  </div>
</div>
<?php }
}
