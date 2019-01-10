<?php session_start();
require '../config/conexion.php';
require '../models/tablaModel.php';
require '../models/cuentaModel.php';

$accion = $_POST['accion'];

switch ($accion) {
  case 'obtener':
    $mesas = new Tabla('mesas');

    $res = $mesas->obtenerDatosDonde('estado', 'Ocupada');

    if ($res) {
      echo json_encode($res);
    } else {
      echo json_encode('fail');
    }
  break;

  case 'agregar':
    $cuenta = new Mesa();

    $datos = array(
      $_POST['id_mesa'],
      intval($_POST['personas']),
      $_POST['cliente']
    );

    $cuenta->setCuenta($datos);
    $res = $cuenta->agregar();

    if ($res == 1) {
      echo json_encode('success');
    } else {
      echo json_encode('fail');
    }
  break;

  case 'select_mesas':
    $mesas = new Tabla('mesas');

    $res = $mesas->obtenerDatosDonde('estado', 'Disponible');

    if ($res) {
      echo json_encode($res);
    } else {
      echo json_encode('fail');
    }
  break;

  default:
    echo json_encode('empty_fields');
  break;
}
?>
