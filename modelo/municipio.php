<?php

if (class_exists('municipio') != true) {
    class municipio
    {
        protected $idMunicipio;
        protected $nombreMunicipio;

        public function __construct($idMunicipio = null, $nombreMunicipio = null)
        {
            $this->idMunicipio = $idMunicipio;
            $this->nombreMunicipio = $nombreMunicipio;
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

        public function getNombreMunicipio()
        {
            return $this->nombreMunicipio;
        }

        public function setNombreMunicipio($nombreMunicipio)
        {
            $this->nombreMunicipio = $nombreMunicipio;
            return $this;
        }
    }
}

?>
