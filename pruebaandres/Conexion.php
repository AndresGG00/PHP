<?php
class Conexion {
    //Atributos
    private $host;
    private $user;
    private $pass;
    private $db;
    private $conexion;

    //Constructor
    public function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "i1i11";
        $this->conexion = new mysqli();
    }

    //Realizar la conexión con la base de datos
    public function conectar() {
        $this->conexion->connect($this->host, $this->user, $this->pass, $this->db);
    }

    //Realizar una consulta
    public function consulta($sql) {
        return $this->conexion->query($sql);
    }

    //Inicializar una consulta
    public function inicializarConsulta($rs) {
        return mysqli_data_seek($rs, 0);
    }

    //Desconectarse de la base de datos
    public function desconectar() {
        $this->conexion->close();
    }
}
?>