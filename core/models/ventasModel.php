<?php

class Venta
{
  private $datos;
  private $db;

  public function __construct($datos = array())
  {
    $this->db = Conexion::conectar();
    $this->datos = $datos;
  }

  public function insertarVenta($carrito)
  {
    $sql = "INSERT INTO ventas (
      fecha_hora, id_usuario, cliente, monto
    ) VALUES (
    :fecha_hora, :id_usuario, :cliente, :monto)";

    $exe = $this->db->prepare($sql);
    $exe->execute(array(
      'fecha_hora' => $this->datos[1],
      'id_usuario' => $this->datos[2],
      'cliente' => $this->datos[3],
      'monto' => $this->datos[4]
    ));

    if ($exe) {
      insertarDetalleVenta($carrito, $id);
    }
  }

  public function insertarDetalleVenta($carrito, $id_venta)
  {
    $sql = "INSERT INTO detalle_venta (
      fecha_hora, id_usuario, cliente, monto
    ) VALUES (
    :fecha_hora, :id_usuario, :cliente, :monto)";

    $exe = $this->db->prepare($sql);
    $exe->execute(array(
      'fecha_hora' => $this->datos[1],
      'id_usuario' => $this->datos[2],
      'cliente' => $this->datos[3],
      'monto' => $this->datos[4]
    ));
  }
}
