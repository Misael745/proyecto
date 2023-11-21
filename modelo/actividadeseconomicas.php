<?php

if (class_exists('actividadeseconomicas') != true) {
    class actividadeseconomicas
    {
        protected $idActividad;
        protected $nombreActividad;
        protected $monto;

        public function __construct($idActividad = null, $nombreActividad = null, $monto = null)
        {
            $this->idActividad = $idActividad;
            $this->nombreActividad = $nombreActividad;
            $this->monto = $monto;
        }

        public function getIdActividad()
        {
            return $this->idActividad;
        }

        public function setIdActividad($idActividad)
        {
            $this->idActividad = $idActividad;
            return $this;
        }

        public function getNombreActividad()
        {
            return $this->nombreActividad;
        }

        public function setNombreActividad($nombreActividad)
        {
            $this->nombreActividad = $nombreActividad;
            return $this;
        }

        public function getMonto()
        {
            return $this->monto;
        }

        public function setMonto($monto)
        {
            $this->monto = $monto;
            return $this;
        }
    }
}


?>
