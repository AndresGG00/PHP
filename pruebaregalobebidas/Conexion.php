<?php
class Conexion
{
  //Atributos
  private $host;
  private $user;
  private $pass;
  private $bbdd;
  private $conx;

  //Metodos
  public function __construct()
  {
    $this->host = "localhost";
    $this->user = "root";
    $this->pass = "";
    $this->bbdd = "i1i11";
    $this->conx = new mysqli();
  }

  public function conecta()
  {
    $this->conx->connect($this->host, $this->user, $this->pass, $this->bbdd);
  }

  public function consulta($sql)
  {
    return $this->conx->query($sql);
  }

  public function inicializaConsulta($rs)
  {
    return mysqli_data_seek($rs, 0);
  }

  public function desconecta()
  {
    $this->conx->close();
  }
}
?>