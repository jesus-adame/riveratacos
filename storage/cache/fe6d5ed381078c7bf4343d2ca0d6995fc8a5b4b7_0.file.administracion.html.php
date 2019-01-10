<?php
/* Smarty version 3.1.33, created on 2018-12-21 03:30:07
  from 'C:\xampp\htdocs\riveratacos\views\templates\administracion.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1c502f3a45e6_68962406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe6d5ed381078c7bf4343d2ca0d6995fc8a5b4b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\templates\\administracion.html',
      1 => 1545359391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/inc/header_admin.html' => 1,
    'file:views/templates/admon/sucursales.tpl' => 1,
  ),
),false)) {
function content_5c1c502f3a45e6_68962406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:views/inc/header_admin.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/templates/admon/sucursales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
<?php }
}
