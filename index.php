<?php session_start();
include 'core/config/conexion.php';
include 'core/lib/smarty/Smarty.class.php';

$view = isset($_GET['view']) && isset($_SESSION['usuario']) ? $_GET['view'] : 'index';

switch ($view) {
  case 'administracion':
    if ($_SESSION['nivel'] != 'admin' && $_SESSION['nivel'] != 'root') {
      $view = 'index';
    }
    include 'core/controllers/'. $view .'Controller.php';
    break;

  case 'almacen':
    if ($_SESSION['nivel'] != 'almacen' && $_SESSION['nivel'] != 'root') {
      $view = 'index';
    }
    include 'core/controllers/'. $view .'Controller.php';
    break;

  case 'recursoshumanos':
    if ($_SESSION['nivel'] != 'rh' && $_SESSION['nivel'] != 'root') {
      $view = 'index';
    }
    include 'core/controllers/'. $view .'Controller.php';
    break;

  case 'usuarios':
    if ($_SESSION['nivel'] != 'admin' && $_SESSION['nivel'] != 'root') {
      $view = 'index';
    }
    include 'core/controllers/'. $view .'Controller.php';
    break;

  case 'ventas':
    if ($_SESSION['nivel'] != 'ventas' && $_SESSION['nivel'] != 'root') {
      $view = 'index';
    }
    include 'core/controllers/'. $view .'Controller.php';
    break;

  case 'index':
    include 'core/controllers/'. $view .'Controller.php';
    break;

  default:
    header('location: '. $view);
    break;
}
