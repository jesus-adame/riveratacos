<?php
$html = new Smarty();

$html->assign('titulo', 'Control de Inventarios');
$html->display('views/templates/almacen.html');
