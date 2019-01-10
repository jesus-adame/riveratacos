<?php
/* Smarty version 3.1.33, created on 2018-12-19 01:50:41
  from 'C:\xampp\htdocs\riveratacos\views\inc\header_ventas.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1995e1906698_16244957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '148d5dfbb95fb0c9dfb310fcd595768b93fedebe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\inc\\header_ventas.html',
      1 => 1545180640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/inc/dependencies.html' => 1,
  ),
),false)) {
function content_5c1995e1906698_16244957 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <?php $_smarty_tpl->_subTemplateRender('file:views/inc/dependencies.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>

<header class="header_v">

  <div>
    <nav>
      <ul>
        <li>
          <a class="col-xs-12" id="btn_ajustes" href="#" onclick="mostrarModalAjustes()">
            <i class="fas fa-cogs"></i> Ajustes</a></li>
        <li>
          <a class="col-xs-12" id="btn_agregar_m" href="#">
            <i class="fas fa-plus"></i> Agregar Mesa</a></li>
        <li>
          <a class="col-xs-12" href="#">
            <i class="fas fa-receipt"></i> Imprimir Ticket</a></li>
        <li>
          <a class="col-xs-12" id="btn_agregar_descuento" href="#" onclick="mostrarModalDescuentos()">
            <i class="fas fa-percent"></i> Descuentos</a></li>
        <li>
          <a class="col-xs-12" href="#">
            <i class="fas fa-lock"></i> Bloquear</a></li>
        <li>
          <a class="col-xs-12" href="index">
            <i class="fas fa-door-open"></i> Salir</a></li>
      </ul>
    </nav>
  </div>

</header>
<?php }
}
