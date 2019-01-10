<?php
class Cuenta
{
  private $id_mesa;
  private $cliente;
  private $mesero;
  private $personas;
  private $des;
  private $iva;
  private $estado;
  private $total_cuenta;
  private $db;

  public function __construct()
  {
    $this->db = Conexion::conectar();
  }

  public function setCuenta($datos)
  {
    $this->id_mesa = $datos[0];
    $this->cliente = $datos[2];
    $this->mesero = $_SESSION['usuario'];
    $this->personas = $datos[1];
    $this->des = 0;
    $this->iva = 0;
    $this->estado = 'Abierta';
    $this->total_cuenta = 0;
  }

  public function agregar()
  {
    $sql = "INSERT INTO cuenta (
      id_mesa, cliente, mesero,
      no_px, des, iva, estado,
      total_cuenta)VALUES (
      :id_mesa,
      :cliente, :mesero,
      :no_px, :des, :iva,
      :estado, :total_cuenta)";

    $exe = $this->db->prepare($sql);
    $exe->execute(array(
      'id_mesa' => $this->id_mesa,
      'cliente' => $this->cliente,
      'mesero' => $this->mesero,
      'no_px' => $this->personas,
      'des' => $this->des,
      'iva' => $this->iva,
      'estado' => $this->estado,
      'total_cuenta' => $this->total_cuenta
    ));

    if ($exe) {
      $this->editarEstadoMesa($this->id_mesa, 'Ocupada');
      return 1;
    } else { return 0; }
  }

  public function editar()
  {

  }

  public function borrar()
  {

  }

  public function cambiarEstado($id_cuenta, $estado)
  {
    if ($estado === 'Abierta' || $estado === 'Cerrada') {
      $sql = "UPDATE cuenta SET estado = :estado
      WHERE id_cuenta = :id";

      $exe = $this->db->prepare($sql);
      $exe->execute(array(
        'estado' => $estado,
        'id' => $id_cuenta
      ));

      if ($estado === 'Abierta') {
        $this->editarEstadoMesa($this->id_mesa, 'Ocupada');
        return 1;
      } else {
        $this->editarEstadoMesa($this->id_mesa, 'Disponible');
        return 1; }

    } else { return 0; }
  }

  private function editarEstadoMesa($id_mesa, $estado)
  {
    if ($estado === 'Disponible' || $estado === 'Ocupada') {
      $sql = "UPDATE mesas SET estado = :estado
      WHERE id_mesa = :id";

      $exe = $this->db->prepare($sql);
      $exe->execute(array(
        'estado' => $estado,
        'id' => $id_mesa
      ));

      return 1;
    } else { return 0; }
  }
}
