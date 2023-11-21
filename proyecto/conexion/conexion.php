<?php

class Conexion {
    private $server;
    private $user;
    private $pass;
    private $db;
    private $conexion;

    public function __construct($server, $user, $pass, $db) {
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;

        $this->conectar();
    }

    private function conectar() {
        $this->conexion = new mysqli($this->server, $this->user, $this->pass, $this->db);

        if ($this->conexion->connect_errno) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        if ($this->conexion) {
            $this->conexion->close();
            $this->conexion = null;
        }
    }
    

    public function __destruct() {
        $this->cerrarConexion();
    }
}

?>
