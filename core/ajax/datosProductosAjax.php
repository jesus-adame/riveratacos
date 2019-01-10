<?php session_start();

/**
 * Recibe datos del archivo /views/js/agregar_productos.js
 * DataForm(['categoria'])
 */

require '../config/conexion.php';
require '../models/datosProductos.php';
require '../models/tablaModel.php';

if (!isset($_POST['accion'])) {
  $categoria = $_POST['categoria'];
  $accion = '';
} else if (!isset($_POST['categoria'])) {
  $categoria = '';
  $accion = $_POST['accion'];
}


switch ($accion) {
  case 'obtener':
    $productos = new Tabla('productos');
    $res = $productos->obtenerDatos();

    if ($res) {
      echo json_encode($res);
    } else {
      echo json_encode('fail');
    }
  break;

  case 'agregar':
    $cuenta = new Producto();

    $datos = array(
      $_POST['id_producto'],
      $_POST['descripcion']
    );

    $cuenta->setCuenta($datos);
    $res = $cuenta->agregar();

    if ($res == 1) {
      echo json_encode('success');
    } else {
      echo json_encode('fail');
    }
  break;

  case 'btn_alambres':
    $productos = new Tabla('productos');
    $res = $productos->obtenerDatosDonde('id_categoria', 5);

    if ($res) {
      echo json_encode($res);
    } else {
      echo json_encode('fail');
    }
  break;

  case 'btn_tacos':
    $productos = new Tabla('productos');
    $res = $productos->obtenerDatosDonde('id_categoria', 1);

    if ($res) {
      echo json_encode($res);
    } else {
      echo json_encode('fail');
    }
  break;

  default:
    $cat = new Tabla('categorias');
    $categorias = $cat->obtenerDatos();
    $res_cat = '';

    foreach ($categorias as $item) {
      if (substr($categoria, 4) == strtolower($item['nombre'])) {
        $res_cat = $item['id_categoria'];
      }
    }

    $cat->setName('productos');
    $res = $cat->obtenerDatosDonde('id_categoria', $res_cat);

    if ($res) {
      echo json_encode($res);
    } else {
      echo json_encode('fail');
    }
    
  break;
}

