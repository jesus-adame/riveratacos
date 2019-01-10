<?php
$html = new Smarty();

if (isset($_SESSION['usuario']) && isset($_SESSION['nivel'])) {
  $nombre = $_SESSION['usuario'];
  $nivel = $_SESSION['nivel'];
} else {
  $nombre = '';
  $nivel = '';
}

$html->assign('titulo', "BIENVENIDO A RIVERA'S TACOS");
$html->assign('usuario', $nombre);
$html->assign('nivel', $nivel);
$html->assign('fecha', date('d-m-Y'));
$html->assign('year', date('Y'));
$html->display('views/index.html');
