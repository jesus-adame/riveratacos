<?php
/**
 * Clase de conexión a la base de datos.
 * Incluir en el index.php
 */
class Conexion
{

  public static function conectar()
  {
    require 'config.php';
    $con = new PDO('mysql:host='. HOST .';dbname='. DB, USER, PASSWORD);
    $con->exec("set names utf8");
    
    return $con;
  }
}
