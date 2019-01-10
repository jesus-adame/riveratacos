<?php
require '../config/conexion.php';
require '../models/tablaModel.php';
$detalle_cuenta = new Tabla('detalle_cuenta');

$id_cuenta = $_POST['id_cuenta'];

$res = $detalle_cuenta->obtenerDatosJoinDonde('productos', 'id_producto', 'id_cuenta', $id_cuenta);
echo json_encode($res);
?>
