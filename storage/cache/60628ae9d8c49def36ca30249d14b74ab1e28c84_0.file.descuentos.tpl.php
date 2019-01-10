<?php
/* Smarty version 3.1.33, created on 2018-12-11 18:22:54
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\descuentos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0ff26e0d32a4_96253182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60628ae9d8c49def36ca30249d14b74ab1e28c84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\descuentos.tpl',
      1 => 1544548964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0ff26e0d32a4_96253182 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_descuentos" class="modal">
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
<?php }
}
