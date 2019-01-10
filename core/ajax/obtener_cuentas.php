<?php
require_once '../config/conexion.php';
include_once '../models/Cuenta.php';
include_once '../models/tablaModel.php';
$cuentas = new Tabla('cuenta');

$id_mesa = $_POST['id_mesa'];

$array_cuentas = $cuentas->obtenerDatosDonde('id_mesa', $id_mesa);

echo json_encode($array_cuentas);
