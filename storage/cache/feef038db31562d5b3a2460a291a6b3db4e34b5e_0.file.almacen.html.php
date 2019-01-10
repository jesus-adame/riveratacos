<?php
/* Smarty version 3.1.33, created on 2018-11-29 07:28:31
  from 'C:\xampp\htdocs\riveratacos\views\templates\almacen.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bff870fab0d89_07676045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feef038db31562d5b3a2460a291a6b3db4e34b5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\almacen.html',
      1 => 1542684175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/inc/header.html' => 1,
    'file:views/inc/footer.html' => 1,
  ),
),false)) {
function content_5bff870fab0d89_07676045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:views/inc/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <main>
    <div class="wrapper">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1><hr><br>

      <div class="col-xs-12 closter">
        <a href="#">
          <div class="item">
            <img src="storage/images/Rivera´s Taco.jpg" alt="">
            <p>Productos</p>
          </div>
        </a>

        <div class="item">
          <img src="storage/images/Rivera´s Taco.jpg" alt="">
          <p>Inventarios</p>
        </div>
        <div class="item">
          <img src="storage/images/Rivera´s Taco.jpg" alt="">
          <p>Inventarios</p>
        </div>
        <div class="item">
          <img src="storage/images/Rivera´s Taco.jpg" alt="">
          <p>Inventarios</p>
        </div>
      </div>

    </div>
  </main>
<?php $_smarty_tpl->_subTemplateRender('file:views/inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
