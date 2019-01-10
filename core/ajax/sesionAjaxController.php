<?php session_start();
header("Content-Type: application/json; charset=UTF-8");

include '../models/usuarioModel.php';
include '../config/conexion.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

if (!empty($user) && !empty($pass)) {
  $usuario = new Usuario($user, $pass);

  if ($usuario->iniciarSesion()) {
    echo json_encode('success');
    
  } else {
    echo json_encode('not_record');
  }

} else {
  echo json_encode('empty_fields');
}
