<?php

if (class_exists('localidades') != true) {
    class localidades
    {
        protected $idLocalidad;
        protected $idMunicipio;
        protected $idVivienda;
        protected $nombre;

        public function __construct($idLocalidad = null, $idMunicipio = null, $idVivienda = null, $nombre = null)
        {
            $this->idLocalidad = $idLocalidad;
            $this->idMunicipio = $idMunicipio;
            $this->idVivienda = $idVivienda;
            $this->nombre = $nombre;
        }

        public function getIdLocalidad()
        {
            return $this->idLocalidad;
        }

        public function setIdLocalidad($idLocalidad)
        {
            $this->idLocalidad = $idLocalidad;
            return $this;
        }

        public function getIdMunicipio()
        {
            return $this->idMunicipio;
        }

        public function setIdMunicipio($idMunicipio)
        {
            $this->idMunicipio = $idMunicipio;
            return $this;
        }

        public function getIdVivienda()
        {
            return $this->idVivienda;
        }

        public function setIdVivienda($idVivienda)
        {
            $this->idVivienda = $idVivienda;
            return $this;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
            return $this;
        }
    }
}


?>
