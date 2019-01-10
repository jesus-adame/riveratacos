<?php
/* Smarty version 3.1.33, created on 2019-01-03 01:54:27
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas\form_agregar_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2d5d43300634_10516186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20628a547aaa0f5997e07c22297b8dca596c450' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas\\form_agregar_productos.tpl',
      1 => 1546476862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2d5d43300634_10516186 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal_productos" class="modal">
  <div id="content_productos" class="content">

    <div class="window col-xs-11">

      <div class="modal-header">
        <h3>Productos</h3>
        <a id="cerrar_modal_productos" class="close">&times;</a>
      </div>


    <div class="modal-body-g">
      <form id="form_productos" class="form" action="core/ajax/datosProductosAjax.php" method="POST">

        <div class="col-xs-12 row-between">

          <div class="col-xs-6">
            <h3>MESA</h3>
            <select id="select_mesas" class="form col-xs-11" name="mesa">
              <!--
                <option value="1">Mesa 1</option>
                <option value="2">Mesa 2</option>
                <option value="3">Mesa 3</option>
              -->
            </select>
          </div>

          <div class="col-xs-6">
            <h3>CUENTA</h3>
            <select id="select_cuentas" class="form col-xs-11" name="cuenta">
              <!--
                <option value="1">Cuenta 1</option>
                <option value="2">Cuenta 2</option>
                <option value="3">Cuenta 3</option>
              -->
            </select>
          </div>

        </div>

        <div class="row-between col-xs-12">
          <div class="categoria col-xs-2">
            <ul>
                <li>
                  <a class="btn_categorias" id="btn_tacos">Tacos</a></li>
                <li>
                  <a class="btn_categorias" id="btn_alambres">Alambres</a></li>
                <li>
                  <a class="btn_categorias" id="btn_tostadas">Tostadas</a></li>
                <li>
                  <a class="btn_categorias" id="btn_tortas">Tortas</a></li>
                <li>
                  <a class="btn_categorias" id="btn_quesadillas">Quesadillas</a></li>
                <li>
                  <a class="btn_categorias" id="btn_bebidas">Bebidas</a></li>
            </ul>
          </div>

          <div id="tabla_productos" class="closter_productos col-md-5">
            <!-- <div class="col-xs-12">
              <form action="#" method="post">
                item.nombre
                <input class="col-xs-12" type="number" placeholder="Cantidad" min="0" max="200">
                <button class="btn primary" type="button" id_prod="item.id_producto">Cargar</button>
              </form>
            </div> -->
          </div>

          <div class="col-xs-5">
            <table class="tabla col-xs-12">
              <thead>
                <tr>
                  <th>Cantidad</th>
                  <th>Producto</th>
                  <th>IVA</th>
                  <th>Precio</th>
                  <th>Total</th>
                  <th>Empleado</th>
                  <th>Borrar</th>
                </tr>
              </thead>
              <tbody id="tbody_producto">
                <!--
                <tr>
                  <td>2</td>
                  <td>TACO</td>
                  <td>16%</td>
                  <td>$ 18</td>
                  <td>$ 64</td>
                  <td>JUAN</td>
                  <td>
                    <button class="btn danger" type="button" name="button">X</button>
                  </td>
                </tr>
              -->
              </tbody>
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
