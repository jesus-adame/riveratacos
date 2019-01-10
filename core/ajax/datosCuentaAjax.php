<?php session_start();
require '../config/conexion.php';
require '../models/tablaModel.php';
require '../models/cuentaModel.php';

$accion = $_POST['accion'];

switch ($accion) {
  case 'obtener':
    $cuenta = new Tabla('cuenta');

    $id = $_POST['id_mesa'];

    $res = $cuenta->obtenerDatosDonde('id_mesa', $id, 'estado', 'Abierta');
    echo json_encode($res);
  break;

  case 'agregar':
    $cuenta = new Cuenta();

    $datos = array(
      intval($_POST['id_mesa']),
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

  case 'editar':

  break;

  case 'borrar':

  break;

  case 'pagar':
    $cuenta = new Cuenta();

    $datos = array(
      intval($_POST['id_mesa']),
      intval(1),
      ''
    );

    $cuenta->setCuenta($datos);
    $res = $cuenta->cambiarEstado($_POST['id_cuenta'], 'Cerrada');

    if ($res == 1) {
      echo json_encode('success');
    } else {
      echo json_encode('fail');
    }
  break;

  default:
    // code...
  break;
}

?>
