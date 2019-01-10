<?php
class Productos
{
  private $id_producto;
  private $nombre;
  private $costo;
  private $iva;
  private $ganancia;
  private $precio;
  private $id_categoria;
  private $descrip;
  private $id_imagen;
  private $db;

  public function __construct()
  {
    $this->db = Conexion::conectar();
  }

  public function setData($datos)
  {
    $this->id_producto = $datos[0];
    $this->nombre = $datos[1];
    $this->costo = $datos[2];
    $this->iva = $datos[3];
    $this->ganancia = $datos[4];
    $this->precio = $datos[5];
    $this->id_categoria = $datos[6];
    $this->descrip = $datos[7];
    $this->id_imagen = $datos[8];

  }

  public function agregar()
  {
    $sql = "INSERT INTO productos (
      id_producto, nombre, costo,
      iva, ganancia, precio,
      id_categoria, descrip, id_imagen) VALUES (
      :id_producto,
      :nombre, :costo,
      :iva, :ganancia, :precio,
      :id_categoria, :descripcion, :id_imagen)";

    $exe = $this->db->prepare($sql);
    $exe->execute(array(
      'id_producto' => $this->id_producto,
      'nombre' => $this->nombre,
      'costo' => $this->costo,
      'iva' => $this->iva,
      'ganancia' => $this->ganancia,
      'precio' => $this->precio,
      'id_categoria' => $this->id_categoria,
      'descripcion' => $this->descrip,
      'id_imagen' => $this->id_imagen));
  }

  public function editar()
  {

  }

  public function borrar()
  {

  }
}
