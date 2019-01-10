<?php
/**
 *
 */
class Tabla
{
  private $name;
  private $db;
  private $datos;

  public function __construct($name)
  {
    $this->name = $name;
    $this->db = Conexion::conectar();
    $this->datos = array();
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function obtenerDatos()
  {
    $sql = "SELECT * FROM $this->name";

    $exe = $this->db->prepare($sql);
    $exe->execute();

    while ($row = $exe->fetchAll(PDO::FETCH_ASSOC)) {
      $this->datos = $row;
    }

    return $this->datos;
  }

  public function obtenerDatosDonde($campo, $valor, $campo2 = '', $valor2 = '')
  {
    if ($campo2 == '' && $valor2 == '') {
      $sql = "SELECT * FROM $this->name
      WHERE $campo = :$campo";

      $exe = $this->db->prepare($sql);
      $exe->execute(array("$campo" => $valor));

    } else {
      $sql = "SELECT * FROM $this->name
      WHERE $campo = :$campo AND $campo2 = :$campo2";

      $exe = $this->db->prepare($sql);
      $exe->execute(array(
        "$campo" => $valor,
        "$campo2" => $valor2
      ));
    }

    while ($row = $exe->fetchAll(PDO::FETCH_ASSOC)) {
      $this->datos = $row;
    }

    return $this->datos;
  }

  public function obtenerDatosJoinDonde($tabla2, $on, $campo, $valor, $campo2 = '', $valor2 = '')
  {
    if ($campo2 == '' && $valor2 == '') {
      $sql = "SELECT * FROM $this->name INNER JOIN $tabla2 ON
      $this->name.$on = $tabla2.$on
      WHERE $campo = :$campo";

      $exe = $this->db->prepare($sql);
      $exe->execute(array("$campo" => $valor));

    } else {
      $sql = "SELECT * FROM $this->name INNER JOIN $tabla2 ON
      $this->name.$on = $tabla2.$on
      WHERE $campo = :$campo AND $campo2 = :$campo2";

      $exe = $this->db->prepare($sql);
      $exe->execute(array(
        "$campo" => $valor,
        "$campo2" => $valor2
      ));
    }

    while ($row = $exe->fetchAll(PDO::FETCH_ASSOC)) {
      $this->datos = $row;
    }

    return $this->datos;
  }

  public function __destruct()
  {
    $this->name;
    $this->db;
    $this->datos;
  }
}
