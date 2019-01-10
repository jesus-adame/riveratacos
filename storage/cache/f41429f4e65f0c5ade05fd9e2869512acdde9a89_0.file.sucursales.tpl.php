<?php
/* Smarty version 3.1.33, created on 2018-12-21 03:30:49
  from 'C:\xampp\htdocs\riveratacos\views\templates\admon\sucursales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1c5059a070f9_59049055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f41429f4e65f0c5ade05fd9e2869512acdde9a89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\admon\\sucursales.tpl',
      1 => 1545359448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/templates/admon/sec_sucursales.html' => 1,
    'file:views/templates/admon/sec_ingreso.html' => 1,
    'file:views/templates/admon/sec_egreso.html' => 1,
    'file:views/templates/admon/sec_pedido.html' => 1,
    'file:views/templates/admon/sec_utilidad.html' => 1,
  ),
),false)) {
function content_5c1c5059a070f9_59049055 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <main id="sucursales">

    <div id="tabs_menu">

      <ul class="tabs">
        <li>
          <a href="#tab1" class="tab active">Sucursales</a>
        </li>
        <li>
          <a href="#tab2" class="tab">Ingresos</a>
        </li>
        <li>
          <a href="#tab3" class="tab">Egresos</a>
        </li>
        <li>
          <a href="#tab4" class="tab">Pedidos</a>
        </li>
        <li>
          <a href="#tab5" class="tab">Utilidades</a>
        </li>
      </ul>

      <div class="tabs_content">

        <div id="tab1" class="tab_content show">
          <?php $_smarty_tpl->_subTemplateRender('file:views/templates/admon/sec_sucursales.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div id="tab2" class="tab_content">
          <?php $_smarty_tpl->_subTemplateRender('file:views/templates/admon/sec_ingreso.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div id="tab3" class="tab_content">
          <?php $_smarty_tpl->_subTemplateRender('file:views/templates/admon/sec_egreso.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div id="tab4" class="tab_content">
          <?php $_smarty_tpl->_subTemplateRender('file:views/templates/admon/sec_pedido.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div id="tab5" class="tab_content">
          <?php $_smarty_tpl->_subTemplateRender('file:views/templates/admon/sec_utilidad.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

      </div> <!-- Fin tabs_content -->
    </div> <!-- cierre de pestañas --->

  </main>
  <?php echo '<script'; ?>
 src="views/js/tabs.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>tabs('#tabs_menu')<?php echo '</script'; ?>
>
<?php }
}
