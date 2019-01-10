<?php
/* Smarty version 3.1.33, created on 2019-01-02 23:48:56
  from 'C:\xampp\htdocs\riveratacos\views\templates\ventas.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2d3fd8ee36f0_03299956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6f57ea22aa830a730c61c1dd725c44bd77a577' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\ventas.html',
      1 => 1546469335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/inc/header_ventas.html' => 1,
    'file:views/templates/ventas/descuentos.tpl' => 1,
    'file:views/templates/ventas/ajustes.tpl' => 1,
    'file:views/templates/ventas/form_agregar_productos.tpl' => 1,
    'file:views/templates/ventas/form_agregar_mesa.tpl' => 1,
    'file:views/templates/ventas/form_cuentas.tpl' => 1,
    'file:views/templates/ventas/recursos_ventas.tpl' => 1,
  ),
),false)) {
function content_5c2d3fd8ee36f0_03299956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:views/inc/header_ventas.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <main class="col-xs-12"style="padding:0">
    <div class="row-around">

      <section class="col-xs-12 col-sm-5 col-lg-1">
        <div class="categoria">
          <ul>
              <li>
                <a class="btn_categorias" id="btn_tacos">MENU</a></li>
          </ul>
        </div>
       </section>

       <section class="col-xs-12 col-sm-7 col-lg-6">
        <div class="fondo">
          <div id="div_mesas" class="closter_mesas">
            <!-- <button type="button" name="button" class="diseno_m">Mesas</button> -->
         </div>
        </div>
       </section>

      <section class="col-xs-12 col-sm-12 col-lg-4">
        <div class="registro">
          <div class="cuenta-head">
            Cuenta
          </div>
          <hr><br>

          <table class="tabla col-xs-12">
            <thead>
              <tr>
                <th># Id</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
              </tr>
            </thead>

            <tbody id="cuenta">
              <tr>
                <td></td>
                <td></td>
                <td>00.00</td>
                <td>0</td>
                <td>00.00</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3"></td>
                <td>TOTAL</td>
                <td>$</td>
              </tr>
            </tfoot>
          </table><br>

          <div class="row-between col-xs-12">
            <button class="btn primary" type="button">
              <i class="fas fa-percentage"></i> Dividir cuenta
            </button>
            <button class="btn primary" type="button">
              <i class="far fa-hand-point-left"></i> Cambiar Productos
            </button>
            <button class="btn danger" type="button">
              <i class="fas fa-times"></i> Cancelar Cuenta
            </button>
            <button id="btn_pagar" class="btn success" type="button">
              <i class="fas fa-money-check-alt"></i> Pagar
            </button>
          </div><br>

          <ul style="list-style: none">
            <li id="li_mesa"></li>
            <li id="li_cliente"></li>
            <li id="li_no_px"></li>
            <li id="li_estado"></li>
          </ul><br>

        </div>
      </section>
    </div>
  </main>
  <?php $_smarty_tpl->_subTemplateRender("file:views/templates/ventas/descuentos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:views/templates/ventas/ajustes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:views/templates/ventas/form_agregar_productos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:views/templates/ventas/form_agregar_mesa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:views/templates/ventas/form_cuentas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:views/templates/ventas/recursos_ventas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
>
  tabs('#ajustes_tabs');
  <?php echo '</script'; ?>
>
</body>
<?php }
}
