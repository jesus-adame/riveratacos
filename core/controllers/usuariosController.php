<?php
include 'core/models/tablaModel.php';
$html = new Smarty();
$tabla_usuario = new Tabla('usuarios');

$datos = $tabla_usuario->obtenerDatos();

$html->assign('datos', $datos);
$html->assign('titulo', 'Control de Usuarios');
$html->display('views/templates/usuarios.html');
