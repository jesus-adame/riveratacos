<?php
$html = new Smarty();

if (isset($_SESSION['usuario'])) {
  $nombre = $_SESSION['usuario'];
} else {
  $nombre = 'Usuario';
}

$html->assign('titulo', "BIENVENIDO A RIVERA'S TACOS");
$html->assign('usuario', $nombre);
$html->assign('fecha', date('d-m-Y'));
$html->assign('year', date('Y'));
$html->display('views/index.html');
