<?php

if (class_exists('vivienda') != true) {
    class vivienda
    {
        protected $idVivienda;
        protected $propietario;

        public function __construct($idVivienda = null, $propietario = null)
        {
            $this->idVivienda = $idVivienda;
            $this->propietario = $propietario;
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

        public function getPropietario()
        {
            return $this->propietario;
        }

        public function setPropietario($propietario)
        {
            $this->propietario = $propietario;
            return $this;
        }
    }
}
?>