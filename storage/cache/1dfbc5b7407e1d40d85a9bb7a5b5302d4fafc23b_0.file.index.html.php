<?php
/* Smarty version 3.1.33, created on 2019-01-10 20:06:05
  from 'C:\xampp\htdocs\riveratacos\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c37979d929e23_16020918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dfbc5b7407e1d40d85a9bb7a5b5302d4fafc23b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\index.html',
      1 => 1547145814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/inc/header.html' => 1,
    'file:views/inc/footer.html' => 1,
  ),
),false)) {
function content_5c37979d929e23_16020918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:views/inc/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <main>
    <div class="wrapper">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    </div>

    <div class="jumbotron">
      <div class="wrapper">
        <header>
          <h3>Código de Honor</h3>
        </header><br>

        <ul class="text-center" style="list-style: none">
          <li>El servicio al cliente es lo primero</li>
          <li>La honestidad nos caracteriza</li>
          <li>Calidad de clase mundial</li>
        </ul><br>

        <footer>
          <address><small>Actualizado en <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</small> </address>
        </footer>
      </div>
    </div>

    <section class="wrapper">
      <div class="mural col-xs-10 col-md-7">
        <div class="mural-header row-between">
          <h3>Noticias</h3>
          <button class="btn primary" type="button" name="button">Agregar</button>
        </div>
        <hr><br>

        <ul>
          <li class="row-between">
            <p class="">
              Ejemplo noticia Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p><br>
            <div>
              <button class="btn atention" type="button" name="button">Editar</button>
              <button class="btn danger" type="button" name="button">Eliminar</button>
            </div>
          </li><br>

          <li class="row-between">
            <p class="">
              Ejemplo noticia Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, anim id est laborum.
            </p><br>
            <div>
              <button class="btn atention" type="button" name="button">Editar</button>
              <button class="btn danger" type="button" name="button">Eliminar</button>
            </div>
          </li><br>
        </ul>
      </div>
    </section>
  </main>

<?php $_smarty_tpl->_subTemplateRender('file:views/inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
