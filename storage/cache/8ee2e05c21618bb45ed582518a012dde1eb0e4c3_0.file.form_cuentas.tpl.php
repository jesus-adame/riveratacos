<?php
/* Smarty version 3.1.33, created on 2019-01-02 22:26:31
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\form_cuentas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2d2c87de6cf2_30428591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ee2e05c21618bb45ed582518a012dde1eb0e4c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\form_cuentas.tpl',
      1 => 1546464390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2d2c87de6cf2_30428591 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_cuentas" class="modal">
  <div class="content">
    <div class="window col-xs-12 col-md-6">
      <div class="modal-header">
        <h3>MESA #3</h3>
        <a class="close">&times;</a>
      </div>

      <div class="modal-body">
        <table class="tabla col-xs-12">
          <thead>
            <tr>
              <th>Cuenta</th>
              <th>Nombre</th>
              <th>Total</th>
              <th>Estado</th>
              <th>
                <button class="btn success" type="button" name="button">Agregar Cuenta</button>
              </th>
            </tr>
          </thead>
          <tbody id="tbody_cuentas">
            <!--
            <tr>
              <td>1</td>
              <td>Carlos</td>
              <td>$ 500</td>
              <td>Activa</td>
              <td>
                <button class="btn atention" type="button">Editar</button>
                <button class="btn danger" type="button">Borrar</button>
              </td>
            </tr>
          -->
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php }
}
