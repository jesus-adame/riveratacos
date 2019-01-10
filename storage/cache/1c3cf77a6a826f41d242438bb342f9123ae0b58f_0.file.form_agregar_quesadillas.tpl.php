<?php
/* Smarty version 3.1.33, created on 2018-12-11 18:26:28
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\form_agregar_quesadillas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0ff344123191_28560588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c3cf77a6a826f41d242438bb342f9123ae0b58f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\form_agregar_quesadillas.tpl',
      1 => 1544549147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0ff344123191_28560588 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_quesadillas" class="modal">
  <div id="content_quesadillas" class="content">
    <div class="window col-xs-8">

      <div class="modal-header">
        <h3>Quesadillas</h3>
        <a id="cerrar_form_quesadillas" class="close">&times;</a>
      </div>

      <form id="form_quesadillas" class="" action="" method="POST">
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
              <button type="button" name="button" class="btn col-xs-12">Quesadillas de </button>
              <button type="button" name="button" class="btn col-xs-12">Quesadillas de </button>
              <button type="button" name="button" class="btn col-xs-12">Quesadillas de </button>
              <button type="button" name="button" class="btn col-xs-12">Quesadillas de </button>
              <button type="button" name="button" class="btn col-xs-12">Quesadillas de </button>
          </div><br><br>

          <button id="btn_agregar_quesadillas" class="btn primary" type="submit" name="button">Agregar Orden</button>
      </div>
    </form>

    </div>
  </div>
</div>
<?php }
}
