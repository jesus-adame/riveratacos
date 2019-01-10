<?php

class Mesa
{
  private $alias;
  private $estado;
  private $db;

  public function __construct($alias = '')
  {
    $this->db = Conexion::conectar();
    $this->alias = $alias;
  }

  public function setMesa($datos)
  {
    $this->alias = $datos[0];
    $this->estado = $datos[1];
  }

  public function agregar()
  {

  }

  public function editar()
  {

  }

  public function borrar()
  {

  }

  public function cambiarEstado($estado)
  {
    if ($estado === 'Disponible' || $estado === 'Ocupada') {
      $sql = "UPDATE mesas SET estado = :estado
      WHERE id_mesa = :id";

      $exe = $this->db->prepare($sql);
      $exe->execute(array(
        'estado' => $estado,
        'id' => $this->id
      ));

      return $exe;
    } else { return 0; }
  }
}
