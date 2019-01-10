<?php

class ControlarCuenta {
  private $datos;
  private $db;

  public function __construct($con)
  {
    $this->db = Conexion::conectar();;
  }

  function cargarCuenta($id_mesa, $obj_cuenta)
  {
    $c = $obj_cuenta;

    $sql = 'INSERT INTO cuenta (
      id_mesa,
      cliente,
      mesero,
      estado,
      total
    ) VALUES (
      :id_mesa,
      :cliente,
      :mesero,
      :estado,
      :total
    )';

    $exe = $this->db->prepare($sql);
    $exe->execute(array(
      'id_mesa' => $c->id,
      'cliente' => $c->nombre,
      'mesero' => $c->mesero,
      'estado' => $c->estado,
      'total' => $c->total
    ));

    if ($exe) { return 1; }
    else { return 0; }
  }
}
