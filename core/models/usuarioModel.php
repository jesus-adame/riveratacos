<?php
/**
 * Clases Usuario
 */
class Usuario
{
  private $usuario;
  private $pass;
  private $db;

  function __construct($user, $pass)
  {
    $this->db = Conexion::conectar();
    $this->usuario = $user;
    $this->pass = $pass;
  }

  public function iniciarSesion()
  {
    $sql = "SELECT * FROM usuarios
    WHERE usuario = :usuario AND pass = :pass";

    $exe = $this->db->prepare($sql);
    $exe->execute(array(
      'usuario' => $this->usuario,
      'pass' => $this->pass
    ));

    $res = $exe->fetchAll(PDO::FETCH_ASSOC);

    if (count($res)) {
      $_SESSION['usuario'] = $this->usuario;

      foreach ($res as $key) {
        $_SESSION['id_usuario'] = $key['id_usuario'];
        $_SESSION['nivel'] = $key['nivel'];
      }

      return 1;
    } else {
      return 0;
    }
  }
}
